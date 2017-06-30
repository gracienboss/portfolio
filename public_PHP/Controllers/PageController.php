<?php
require_once('../Library/RenderClass.php');
require_once('../Models/OrmClass.php');
Class Page
{
    protected $title;
    protected $content;
    protected $render;
    protected $menu;
    protected $orm;
    
   /* ou methode 2
   *protected $css
   */  
    
    
    


    public function __construct ($title, $content /* $css(methode 2*/)
    {
        $this->render = Render::getInstance();
        $this->title = $title;
        $this->content = $content;
        $this->menu = file_get_contents('../Views/menu.php'); 
        //$this->css = $css (methode 2)
        $this->orm = Orm::getInstance();
    }


    // methode qui renvoi tout vers la vue

    public function display($css)
    {
     //   $this->orm->insertData('users','Anthony','Ceci est une autre description'); // inserer une data qui puise sa formule sur ormClass.php
      //  $this->orm->deleteData('users','4'); // efface une data qui puise sa formule sur ormClass.php        
       // var_dump($this->orm->getAllData('users'));die;
        $template = file_get_contents('../Views/template.php');
        echo $this->render->render($this->menu, $this->title, $this->content, $css, $template);
                                                                            //$this->css (methode 2)
    }
}

// controle tout ce qui se passe sur la page
