<?php

/**
 * Created by PhpStorm.
 * User: diego
 * Date: 11-04-15
 * Time: 11:14 AM
 */
class QuestionController extends BaseController
{
    public function index(){
        $message =['Retrieve Questions Successfully'];
        $code = 200;
        $success =true;
        $questions = null;
        try{
            $questions = Question::select('id','question')->get();
            $message[] = $questions->count().' Questions Retrieve';
        }catch (Exception $e){
            $code=500;
            $message[0] = $e->getCode().': '.$e->getMessage();
            $success =false;
        }
        return Response::json(array(
            'success'  => $success,
            'code'     => $code,
            'messages' => $message,
            'questions'=> $questions
        ));
    }

    public function show($id){
        $message =['Retrieve Question Successfully'];
        $code = 200;
        $success =true;
        $questions = null;
        try{
            $questions = Question::select('id','question')
                ->where('id','=',$id)
                ->first();
        }catch (Exception $e){
            $code=500;
            $message[0] = $e->getCode().': '.$e->getMessage();
            $success =false;
        }
        return Response::json(array(
            'success'  => $success,
            'code'     => $code,
            'messages' => $message,
            'question' => $questions
        ));
    }

    public function create(){
        $message =['Question Created Successfully'];
        $code = 201;
        $success =true;
        $newQuestion = null;
        try{
            $newQuestion = new Question();
            $newQuestion->question = Request::get('question');
            $newQuestion->save();
        }catch (Exception $e){
            $code=500;
            $message[0] = $e->getCode().': '.$e->getMessage();
            $success =false;
        }
        return Response::json(array(
            'success'  => $success,
            'code'     => $code,
            'messages' => $message,
            'question' => $newQuestion
        ));
    }

    public function update($id){
        $message =['Question Updated Successfully'];
        $code = 202;
        $success =true;
        $question = null;
        try{
            $question = Question::find($id);
            $question->question = Request::get('question');
            $question->save();
        }catch (Exception $e){
            $code=500;
            $message[0] = $e->getCode().': '.$e->getMessage();
            $success =false;
        }
        return Response::json(array(
            'success'  => $success,
            'code'     => $code,
            'messages' => $message,
            'question' => $question
        ));
    }
}