<?php

/**
 * Created by PhpStorm.
 * User: diego
 * Date: 11-04-15
 * Time: 11:25 AM
 */
class OptionsController extends BaseController
{
    public function question($id){
        $message =['Retrieve Question Successfully'];
        $code = 200;
        $success =true;
        $questions = null;
        try{
            $questions = Question::select('id','question')
                ->with('options')
                ->where('id','=',$id)
                ->first();
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
            'question' => $questions
        ));
    }

    public function create($idQuestion){
        $message =['Answer Option Created Successfully'];
        $code = 201;
        $success =true;
        $answer = null;
        try{
            $answer = new Option();
            $answer->option = Request::get('answer');
            $answer->question_id = $idQuestion;
            $answer->save();
        }catch (Exception $e){
            $code=500;
            $message[0] = $e->getCode().': '.$e->getMessage();
            $success =false;
        }
        return Response::json(array(
            'success'  => $success,
            'code'     => $code,
            'messages' => $message,
            'AnswerOption' => $answer
        ));
    }

    public function update($id){
        $message =['Answer Option Updated Successfully'];
        $code = 202;
        $success =true;
        $answer = null;
        try{
            $answer = Option::find($id);
            $answer->option = Request::get('answer');
            $answer->save();
        }catch (Exception $e){
            $code=500;
            $message[0] = $e->getCode().': '.$e->getMessage();
            $success =false;
        }
        return Response::json(array(
            'success'  => $success,
            'code'     => $code,
            'messages' => $message,
            'question' => $answer
        ));
    }
}