<?php

arch()->preset()->php();

arch('native components follow the SuperNative conventions')
    ->expect('App\NativeComponents')
    ->toExtend('Native\Mobile\Edge\NativeComponent')
    ->toHaveMethod('render');
