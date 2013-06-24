<?php

class HelloController extends AppController
{
    public function welcome()
    {
        $threads = Hello::getAllThreads();
        $this->set(get_defined_vars());
    }
}
