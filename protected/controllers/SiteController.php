<?php


class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionWhy()
	{
		$this->render('why');
	}

	public function actionServices()
	{
		$this->render('services');
	}

	public function actionPricing()
	{
		$this->render('pricing');
	}

	public function actionThriveintro()
	{
		$this->render('thriveintro');
	}

	public function actionThriveprogram()
	{
		$this->render('thriveprogram');
	}

	public function actionAppointmentsetters()
	{
		$this->render('appointmentsetters');
	}

	public function actionContact()
	{
		$this->renderPartial('contact');
	}

	public function actionBlog($page='blog')
	{
		if ($page == 'three_keys_to_agency_success') { // done
			$this->render('blog_pages/three_keys_to_agency_success');
		}
		else if ($page == 'common_enemy_of_all_insurance_agents') { // done
			$this->render('blog_pages/common_enemy_of_all_insurance_agents');
		}
		else if ($page == 'follow_up_after_customer_insurance_review_meetings') {
			$this->render('blog_pages/follow_up_after_customer_insurance_review_meetings'); 
		}
		else if ($page == 'five_steps_for_preparing_files') {
			$this->render('blog_pages/five_steps_for_preparing_files'); 
		} else {
			$this->render('blog');
		}
		
	}

	public function actionFaqs()
	{
		$this->render('faqs');
	}


	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}



}