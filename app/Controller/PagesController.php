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
    * @access public
    */
    public function index()
    {
        $this->set('title_for_layout', 'Infomations');
    }

   /*
    * リリースノート
    *
    * @access public
    */
    public function releaseNotes()
    {
        $this->set('title_for_layout', 'リリースノート');
    }

   /*
    * gishhubとは
    *
    * @access public
    */
    public function about()
    {
        $this->set('title_for_layout', 'gishhubとは');
    }

   /*
    * プロダクト
    *
    * @access public
    */
    public function products()
    {
        $this->set('title_for_layout', 'プロダクト');
    }

   /*
    * メンバー紹介
    *
    * @access public
    */
    public function members()
    {
        $this->set('title_for_layout', 'メンバー紹介');
    }

   /*
    * カルチャー
    *
    * @access public
    */
    public function culture()
    {
        $this->set('title_for_layout', 'カルチャー');
    }

   /*
    * 活動場所
    *
    * @access public
    */
    public function activities()
    {
        $this->set('title_for_layout', '活動場所');
    }

   /*
    * 免責事項
    *
    * @access public
    */
    public function disclaimer()
    {
        $this->set('title_for_layout', '免責事項');
    }

   /*
    * お問い合わせ
    *
    * @access public
    */
    public function inquiry()
    {

if ($this->request->data('post')) {

}


        $this->set('title_for_layout', 'お問い合わせ');
    }
}
