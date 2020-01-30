<?php

namespace fangchaogang\uniontk\jingdong;


interface RequestInterface
{
    public function getMethod();

    public function getParamJson();
}