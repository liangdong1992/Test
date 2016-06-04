var currentQuestionIndex = 0;
var quetionNumber = 5;
$(document).ready(function(){
	$("#questionBody, #operation, #awardInfo").hide();
	$("#questionBody > div").hide();
	$("#operation button, #operation span").hide();
	currentQuestionIndex = 0;
});

function startAnswer(){
	$("#indexBody").fadeOut();
	$("#questionBody, #operation, #awardInfo").fadeIn();
	$("#q1, #nextQuestion").fadeIn();
	currentQuestionIndex = 1;
	handleOperatorButton();
}

function nextQuestion(){
	var currentResult = checkCurrentResult();
	if(!currentResult){
		$("#message").modal();
		return;
	}
	$("#q"+(currentQuestionIndex++)).hide();
	$("#q"+currentQuestionIndex).fadeIn();
	handleOperatorButton();
}

function lastQuestion(){
	$("#q"+(currentQuestionIndex--)).hide();
	$("#q"+currentQuestionIndex).fadeIn();
	handleOperatorButton();
}

function handleOperatorButton(){
	hideOperatorButton();
	showOperatorButton();
}

function showOperatorButton(){
	if(currentQuestionIndex==1){
		$("#nextQuestion, #awardInfo").show();
	}else if(currentQuestionIndex==quetionNumber){
		$("#lastQuestion, #last-submit, #submitButton").show();
	}else{
		$("#lastQuestion, #last-next, #nextQuestion").show();
	}
}

function hideOperatorButton(){
	if(currentQuestionIndex==1){
		$("#lastQuestion, #last-next, #last-submit, #submitButton").hide();
	}else if(currentQuestionIndex==quetionNumber){
		$("#last-next, #nextQuestion, #awardInfo").hide();
	}else{
		$("#last-submit, #submitButton, #awardInfo").hide();
	}
}

function checkCurrentResult(){
	var currentResult = false;
	var questionDiv = $("#q"+currentQuestionIndex);
	var questionType = questionDiv.attr("questionType");
	if(questionType=="single"||questionType=="multiple"){
		var inputArr = questionDiv.find("input");
		inputArr.each(function(){
			if($(this).prop("checked")){
				currentResult = true;
				return false;
			}
		});
	}else{
		var textarea = questionDiv.find("textarea");
		if($.trim(textarea.val()!="")){
			currentResult = true;
		}
	}
	return currentResult;
}

function closeModal(obj, event) {
	event = window.event || event;
	if ($(event.target).attr("id") == $(obj).attr("id")) {
		$(obj).modal("close");
	}
}