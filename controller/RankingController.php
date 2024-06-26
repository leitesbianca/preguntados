<?php

class RankingController
{
    private $presenter;
    private $model;

    public function __construct($model, $presenter)
    {
        $this->model = $model;
        $this->presenter = $presenter;
    }

    public function home()
    {
        $ranking = $this->model->getRanking();

        $this->presenter->render("view/verRankingView.mustache", ["ranking" => $ranking]);
    }

}