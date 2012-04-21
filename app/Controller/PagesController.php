<?php
class PagesController extends AppController {

    public $name = 'Pages';

    public function beforeFilter()
    {
        parent::beforeFilter();
    }

   /*
    * トップページ
    *
    */
    public function index()
    {
        $this->set('title_for_layout', TITLE . ADDITIONAL_TITLE);
    }

   /*
    * リリースノート
    *
    */
    public function releaseInfos()
    {
        $this->set('title_for_layout', TITLE . ' リリースノート');
    }

   /*
    * GISHHUB.COMとは
    *
    */
    public function whatis()
    {
        $this->set('title_for_layout', TITLE . ' とは');
    }

   /*
    * プロダクト
    *
    */
    public function products()
    {
        $this->set('title_for_layout', TITLE . ' プロダクト');
    }

   /*
    * メンバー紹介
    *
    */
    public function members()
    {
        $this->set('title_for_layout', TITLE . ' メンバー紹介');
    }

   /*
    * カルチャー
    *
    */
    public function cultures()
    {
        $this->set('title_for_layout', TITLE . ' カルチャー');
    }

   /*
    * 活動場所
    *
    */
    public function activities()
    {
        $this->set('title_for_layout', TITLE . ' 活動場所');
    }

   /*
    * 免責事項
    *
    */
    public function disclaimers()
    {
        $this->set('title_for_layout', TITLE . ' 免責事項');
    }
}
