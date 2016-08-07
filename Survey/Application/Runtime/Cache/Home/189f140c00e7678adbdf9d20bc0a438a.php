<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="user-scalable=no, maximum-scale=10.0, minimum-scale=0.25, width=device-width, height=device-height, initial-scale=0.6" />
		<title>问卷调查封面</title>
		<link type="text/css" rel="stylesheet" href="/Survey/Public/assets/css/amazeui.min.css"/>
		<link type="text/css" rel="stylesheet" href="/Survey/Public/survey/css/survey.css"/>
		<script type="text/javascript" src="/Survey/Public/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="/Survey/Public/assets/js/amazeui.min.js"></script>
		<script type="text/javascript" src="/Survey/Public/survey/js/survey.js"></script>
	</head>
	<body>
		<div class="index-background"></div>
		<div class="index-logo">
			<img alt="logo" src="/Survey/Public/survey/image/logo1.png">
			<img alt="logo" src="/Survey/Public/survey/image/logo2.png">
		</div>
		<div id="indexBody" class="index-body">
			<img alt="body" src="/Survey/Public/survey/image/mid-1.png">
			<br/><br/><br/>
			<button type="button" class="am-btn am-btn-xl am-btn-warning am-round answer-button" onclick="startAnswer();">开始答题</button>
			<div class="index-footer">
				<p>"xxx"出品</p>
				<p>www.xxx.com</p>
			</div>
		</div>
		<form id="surveyForm" action="/Survey/index.php/Home/Survey/submitSurvey" method="post">
		<div id="questionBody" class="question-body">
			<div id="q1" questionType="single">
				<div class="question">
					1. 昙花的寿命最少保持能4小时, 小麦开花的时间是昙花寿命的0.02倍, 约____.
				</div>
				<div class="answer">
					<label class="am-radio">
						<input type="radio" name="q1Answer" value="1" data-am-ucheck/>0.8分钟
				    </label>
				    <label class="am-radio">
						<input type="radio" name="q1Answer" value="2" data-am-ucheck/>5分钟
				    </label>
				    <label class="am-radio">
						<input type="radio" name="q1Answer" value="3" data-am-ucheck/>0.08分钟
				    </label>
				    <label class="am-radio">
						<input type="radio" name="q1Answer" value="4" data-am-ucheck/>4分钟
				    </label>
				</div>
			</div>
			<div id="q2" questionType="single">
				<div class="question">
					2. 下列句子中有错别字的一项是____.
				</div>
				<div class="answer">
					<label class="am-radio">
						<input type="radio" name="q2Answer" value="1" data-am-ucheck/>国家标准与国家法律法规相辅相成, 各地区要严格遵守, 不能各行其事.
				    </label>
				    <label class="am-radio">
						<input type="radio" name="q2Answer" value="2" data-am-ucheck/>本次汽车设计大赛的获奖选手, 未来也许就是中国汽车设计界的中流砥柱.
				    </label>
				    <label class="am-radio">
						<input type="radio" name="q2Answer" value="3" data-am-ucheck/>长江三峡高深的峡谷、弥漫的云雾、湍急的水流给游览者留下了深刻的印象.
				    </label>
				    <label class="am-radio">
						<input type="radio" name="q2Answer" value="4" data-am-ucheck/>为了更好地传承中华文明, 台湾艺术家抱着追本溯源的心态到内地进行交流.
				    </label>
				</div>
			</div>
			<div id="q3" questionType="multiple">
				<div class="question">
					3. 政治学所研究的问题错综复杂，但归根结底，就是____.
				</div>
				<div class="answer">
					<label class="am-checkbox">
						<input type="checkbox" name="q3Answer[]" value="1" data-am-ucheck/>个人
				    </label>
				    <label class="am-checkbox">
						<input type="checkbox" name="q3Answer[]" value="2" data-am-ucheck/>家庭
				    </label>
				    <label class="am-checkbox">
						<input type="checkbox" name="q3Answer[]" value="3" data-am-ucheck/>社会
				    </label>
				    <label class="am-checkbox">
						<input type="checkbox" name="q3Answer[]" value="4" data-am-ucheck/>国家
				    </label>
				</div>
			</div>
			<div id="q4" questionType="multiple">
				<div class="question">
					4. 关于惯性，下列说法中错误的是____.
				</div>
				<div class="answer">
					<label class="am-checkbox">
						<input type="checkbox" name="q4Answer[]" value="1" data-am-ucheck/>速度大的物体惯性大, 速度小的物体惯性小.
				    </label>
				    <label class="am-checkbox">
						<input type="checkbox" name="q4Answer[]" value="2" data-am-ucheck/>一切物体在任何情况下都具有惯性.
				    </label>
				    <label class="am-checkbox">
						<input type="checkbox" name="q4Answer[]" value="3" data-am-ucheck/>顺着地球自转方向使劲竖直向上跳, 则不会落在原地.
				    </label>
				    <label class="am-checkbox">
						<input type="checkbox" name="q4Answer[]" value="4" data-am-ucheck/>通电线圈在磁场中能连续地转动也与惯性有关.
				    </label>
				</div>
			</div>
			<div id="q5" questionType="open">
				<div class="question">
					5. 围绕新中国成立60周年和改革开放30年所取得的伟大成就, 谈谈你的感想.
				</div>
				<div class="answer">
					<textarea rows="8" name="q5Answer"></textarea>
				</div>
			</div>
		</div>
		</form>
		<div id="operation" class="operation">
			<button id="lastQuestion" type="button" class="am-btn am-btn-xl am-btn-warning am-round answer-button" onclick="lastQuestion();">上一题</button>
			<span id="last-next"></span>
			<button id="nextQuestion" type="button" class="am-btn am-btn-xl am-btn-warning am-round answer-button" onclick="nextQuestion();">下一题</button>
			<span id="last-submit"></span>
			<button id="submitButton" type="submit" form="surveyForm" class="am-btn am-btn-xl am-btn-warning am-round answer-button">提&nbsp;&nbsp;&nbsp;&nbsp;交</button>
		</div>
		<div id="awardInfo" class="award-info">
			得分在80.00分以上的童鞋有机会获得一个精美小礼品哦
			<br/>
			获奖规则：
			<br/>
			1.答题后分享活动链接至朋友圈；
			<br/>
			2.将分享截图发至"xxx"公众号并附上联系方式；
			<br/>
			（每周抽取20名幸运用户，so记得分享哦！）
		</div>
		<div id="message" class="am-modal am-modal-no-btn" tabindex="-1" onclick="closeModal(this, event);">
		  <div class="am-modal-dialog">
		    <div class="am-modal-hd">
		    	温馨提示
		      <a href="javascript:;" class="am-close am-close-spin" data-am-modal-close>&times;</a>
		    </div>
		    <div class="am-modal-bd">
		      	答案不能为空哦
		    </div>
		  </div>
		</div>
	</body>
</html>