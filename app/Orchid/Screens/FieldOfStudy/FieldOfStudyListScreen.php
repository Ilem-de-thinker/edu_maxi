<?php

namespace App\Orchid\Screens\FieldOfStudy;

use App\FieldOfStudy\DataTransferObjects\CreateFieldOfStudyDTO;
use App\FieldOfStudy\Repository\FieldOfStudyRepository;
use App\FieldOfStudy\Services\FieldOfStudyService;
use App\Models\FieldOfStudy;
use Illuminate\Http\Request;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class FieldOfStudyListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'field_of_studies' => FieldOfStudyRepository::getAll(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Field Of Study';
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Add Field Of Study')
                ->modal('FieldOfStudy')
                ->method('create')
                ->icon('plus'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('field_of_studies', [
                TD::make('name'),
                TD::make('slug'),
                TD::make('action')->render(function (FieldOfStudy $fieldOfStudy) {
                    return Button::make('Delete')
                        ->confirm('Are you sure you want to dekete this field of study ')
                        ->method('delete', ['field_of_study' => $fieldOfStudy->id]);
                }),
            ]),
            Layout::modal('FieldOfStudy', Layout::rows(
                [
                    Input::make('fieldOfStudy.name')->title('Name')
                        ->placeholder('Add Field Of Study name'),
                ]
            ))->title('Create Field Of Study')
                ->applyButton('Create'),
        ];
    }

    public function delete(FieldOfStudy $field_of_study)
    {
        FieldOfStudyService::delete($field_of_study->id);
        Toast::info('Field of study deleted successfully.');
    }

    public function create(Request $request)
    {
        $request->validate([
            'fieldOfStudy.name' => 'required|string|unique:field_of_studies,name',
        ]);

        $createFieldOfStudyDto = new CreateFieldOfStudyDTO($request->input('fieldOfStudy.name'));
        FieldOfStudyService::create($createFieldOfStudyDto);
    }
}
