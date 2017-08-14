<?php

namespace PhoNetworksAutogenerated;

use Pho\Framework;
use Pho\Kernel\Kernel;
use Pho\Kernel\Traits;
use Pho\Kernel\Foundation;




/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Page extends Foundation\AbstractActorDP {

    const T_EDITABLE = true;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x0f754;
    const DEFAULT_MASK = 0xfffff;

    const FIELDS = "{\"creator\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"uuid\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null},\"directives\":{\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\"}},\"join_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"uuid\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null},\"directives\":{\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\"}},\"about\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"255\",\"uuid\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null},\"directives\":{\"md5\":false,\"now\":false,\"default\":\"\"}}}";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Lib\Graph\GraphInterface $graph , ?\PhoNetworksAutogenerated\User $creator, ?string $about = "")
    {
        $this->registerIncomingEdges(UserOut\Follow::class);
        $this->registerIncomingEdges(StatusUpdateOut\Mention::class);
        $this->registerIncomingEdges(Edges\Consume::class);
        $this->registerIncomingEdges(Edges\Message::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Post::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Post::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\React::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\React::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Comment::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Comment::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Consume::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Consume::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Message::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Message::class);
        parent::__construct($kernel, $graph);
                $this->setCreator($creator, true);
        $this->setJoinTime(time(), true);
        $this->setAbout($about, true);

        $this->persist();
    }

}

/*****************************************************
 * Timestamp: 1502752003
 * Size (in bytes): 2936
 * Compilation Time: 1934
 * 2116302e0fbb8d094ca077a8221eedc5
 ******************************************************/