<?php

class Controller_Portfolio extends Controller
{

    public function action_index()
    {
        $this->view->generate('portfolio_view.php', 'template_view.php');
    }
}