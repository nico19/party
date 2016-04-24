<?php

class OrderController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index', 'view', 'create'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new OrderForm;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['OrderForm']))
		{
			$model->attributes=$_POST['OrderForm'];
			if($model->validate()){
				$personM = new Person();
				$personW = new Person();
				$order = new Order();

				$personM->idcode = $model->idcode_m;
				$personM->pipd = $model->pipd_m;
				$personM->pipp = $model->pipp_m;
				$personM->place_birth = $model->place_birth_m;
				$personM->place_home = $model->place_home_m;
				$personM->number_passport = $model->number_passport_m;
				$personM->who_gave = $model->who_gave_m;
				$personM->date = $model->date_gave_m;
				$personM->marital_status = $model->marital_status_m;

				$personW->idcode = $model->idcode_w;
				$personW->pipd = $model->pipd_w;
				$personW->pipp = $model->pipp_w;
				$personW->place_birth = $model->place_birth_w;
				$personW->place_home = $model->place_home_w;
				$personW->number_passport = $model->number_passport_w;
				$personW->who_gave = $model->who_gave_w;
				$personW->date = $model->date_gave_w;
				$personW->marital_status = $model->marital_status_w;

				$personM->save();

				$personW->save();
				
				$order->personm_id = $personM->id;
				$order->personw_id = $personW->id;
				$order->date = $model->data_registration;
				$order->ceremony = $model->ceremony;
				$order->organDRATC_id = 1;
				$order->user_id = Yii::app()->user->getId();
				$order->save();

				//exit('ok');
			}
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Order']))
		{
			$model->attributes=$_POST['Order'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('Order');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Order('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Order']))
			$model->attributes=$_GET['Order'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Order the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Order::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Order $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='order-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
