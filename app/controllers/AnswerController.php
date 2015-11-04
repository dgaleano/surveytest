<?php

/**
 * Created by PhpStorm.
 * User: diego
 * Date: 11-04-15
 * Time: 12:15 PM
 */
class AnswerController extends BaseController
{
    public function create($id){
        $message =['Question Created Successfully'];
        $code = 201;
        $success =true;
        $newAnswer = null;
        try{
            if(Request::has('idAnswerOption')){
                $newAnswer = new Answer();
                $newAnswer->question_id = $id;
                $newAnswer->option_id   = Request::get('idAnswerOption');
                $newAnswer->save();
                $newAnswer->description();
            }
            if(Request::has('AnswerOption')){
                $option = Option::select('id')
                    ->where('option','=',Request::get('AnswerOption'))
                    ->first();
                $newAnswer = new Answer();
                $newAnswer->question_id = $id;
                $newAnswer->option_id   = $option->id;
                $newAnswer->save();
                $newAnswer->description();
            }
        }catch (Exception $e){
            $code=500;
            $message[0] = $e->getCode().': '.$e->getMessage();
            $success =false;
        }
        return Response::json(array(
            'success'  => $success,
            'code'     => $code,
            'messages' => $message,
            'answer'   => $newAnswer
        ));
    }

    public function show($id){
        $message =['Retrieve Question answers Successfully'];
        $code = 200;
        $success =true;
        $questionAnswers = null;
        try{
            $questionAnswers = Question::select('id','question')
                ->where('id','=',$id)
                ->with('answer.description')
                ->get();
        }catch (Exception $e){
            $code=500;
            $message[0] = $e->getCode().': '.$e->getMessage();
            $success =false;
        }
        return Response::json(array(
            'success'  => $success,
            'code'     => $code,
            'messages' => $message,
            'questionAnswer' => $questionAnswers
        ));
    }
}