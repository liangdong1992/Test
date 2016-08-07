<?php

namespace Home\Controller;

use Think\Controller;

class SurveyController extends Controller{

	public function _empty(){
		echo "404";
	}

	public function toSurvey(){
		$this->display("survey");
	}
	
	public function submitSurvey(){
		if(IS_POST){
			$this->handleSurvey();
		}else{
			echo "Only Support 'POST'...";
		}
	}
	
	private function handleSurvey(){
		header("Content-type:text/html;charset=utf-8");
	
		$q1Answer = I("q1Answer");
		$q2Answer = I("q2Answer");
		//$q3Answer = print_r(I("q3Answer"));
		//$q4Answer = print_r(I("q4Answer"));
		$q5Answer = I("q5Answer");
		
		echo "Q1 : ".$q1Answer."<br/>";
		echo "Q2 : ".$q2Answer."<br/>";
		
		echo "Q3 : ";
		print_r(I("q3Answer"));
		echo "<br/>";
		
		echo "Q4 :";
		print_r(I("q4Answer"));
		echo "<br/>";
		
		echo "Q5 : ".$q5Answer;
	}

}