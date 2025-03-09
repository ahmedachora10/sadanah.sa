<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\Questionnaire;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Questionnaire')]
class QuestionnaireContainer extends Component
{
    use WithPagination;

    public ?Questionnaire $questionnaire = null;

    public function mount()
    {
        Auth::user()->unreadnotifications()->whereJsonContains('data->type', Questionnaire::class)?->update(['read_at' => now()]);
    }

    public function delete(Questionnaire $questionnaire)
    {
        $questionnaire->delete();

        session()->put('success', trans('message.delete'));

        $this->dispatch('refresh-alert');
    }

    public function show(Questionnaire $questionnaire)
    {
        // dd($questionnaire->favorite_colors);
        $this->questionnaire = $questionnaire;
        $this->dispatch('open-modal', target: '#questionnaire-details');
    }

    public function generatePDF(Questionnaire $questionnaire)
    {
        TCPDF::SetCreator(Auth::user()->name);
        TCPDF::SetAuthor($questionnaire->client_name);
        TCPDF::SetTitle('Sadnah Brief');
        TCPDF::SetSubject('Sadnah Client Questionnaire');

        // Add Arabic font (built-in aealarabiya or custom font)
        TCPDF::SetFont('aealarabiya', '', 14);

        // RTL Configuration
        TCPDF::setRTL(true);
        TCPDF::SetAutoPageBreak(true, 15);

        // Add a page
        TCPDF::AddPage();

        $questionnaireName = str_replace(' ', '-', $questionnaire->client_name);

        // HTML Content (Arabic)
        $html = view('exports.pdf.sadnah-brief', ['questionnaire' => $questionnaire])->render();

        // Write HTML content
        TCPDF::writeHTML($html, true, false, true, false, '');

        $downloadPDFName = "questionnaire-{$questionnaireName}-{$questionnaire->id}.pdf";

        return response()->streamDownload(
            fn () => print(TCPDF::Output($downloadPDFName, 'S')),
            $downloadPDFName
        );
    }


    public function render()
    {
        return view('livewire.dashboard.container.questionnaire-container', [
            'items' => Questionnaire::with(['logoType', 'corporateIdentities'])->latest()->paginate(8)
        ]);
    }
}
