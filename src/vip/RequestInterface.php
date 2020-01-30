<?php

namespace fangchaogang\uniontk\vip;


interface RequestInterface
{
    public function getMethod();

    public function getParamJson();
}
