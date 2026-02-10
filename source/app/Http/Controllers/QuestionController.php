<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::query()->orderBy('sort')->get();

        $nextSort = $this->getNextSort();
        return Inertia::render('Question/QuestionIndexPage', [
            'questions' => $questions,
            'nextSort' => $nextSort
        ]);
    }

    /**
     * @throws ValidationException
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->only(['sort', 'question', 'answer']), [
            'sort' => ['sometimes', 'integer', 'min:1'],
            'question' => ['required'],
            'answer' => ['required']
        ], [
            'sort.integer' => 'Giá trị không đúng',
            'question.required' => 'Vui lòng không bỏ trống',
            'answer.required' => 'Vui lòng không bỏ trống',
        ])->validated();


        $question = Question::create([
            'sort' => $request->sort ,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        return back()->with([
            'type' => 'success',
            'message' => 'Thêm mới thành công',
            'questionNew' => $question
        ]);
    }

    public function update(Request $request)
    {

    }

    private function getNextSort()
    {
        $maxSort = Question::max('sort');
        return $maxSort ? $maxSort + 1 : 1;
    }
}
