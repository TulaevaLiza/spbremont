<?php

return array(
    "\/(прайс)\/.*?_(\d+)\.html"=>"price/view/$1/$2",
    "\/(прайс)"=>"price/index/$1",
    "\/контакты"=>"contact/index",
    "\/(блог)\/.*?_(\d+)\.html"=>"blog/view/$1/$2",
    "\/(блог)"=>"blog/index/$1",
    "\/(фото_ремонта)\/.*?_(\d+)\.html"=>"gallery/view/$1/$2",
    "\/(фото_ремонта)"=>"gallery/index/$1",
    "\/(услуги)\/([а-я_0-9]+)"=>"item/view/$1/$2",
    "\/(услуги)"=>"item/index/$1",
    "\/([а-я_0-9]+)"=>"page/view/$1",
    "\/"=>"main/index"
);
