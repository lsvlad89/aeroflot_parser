<?php
class HelloController extends CController
{
   public function actionWorld()
   {
       $this->pageTitle = "Мой блог :: Главная страница";
       echo 'Привет от HelloController->actionWorld()';
       echo $this->pageTitle;
   }
}