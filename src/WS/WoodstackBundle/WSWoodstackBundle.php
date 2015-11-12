<?php

namespace WS\WoodstackBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WSWoodstackBundle extends Bundle
{
	public function getParent(){
		return 'FOSUserBundle';
	}
}
