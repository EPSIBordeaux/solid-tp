<?php

namespace DIP;

use SplEnum;

class XmlSource extends SplEnum
{
    const __default = self::Undefined;

    const Undefined = 0;
    const File = 1;
    const Database = 2;
}