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

class Group extends Foundation\AbstractGraphDP {

    const T_EDITABLE = true;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x1f751;
    const DEFAULT_MASK = 0xff999;

    const FIELDS = "{\"title\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"80\",\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"description\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"create_date\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}}}";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Kernel\Foundation\AbstractActor $actor, \Pho\Lib\Graph\GraphInterface $graph , string $title, string $description)
    {
        $this->registerIncomingEdges(UserOut\Create::class);
        $this->registerIncomingEdges(Edges\Consume::class);
        parent::__construct($kernel, $actor, $graph);
                $this->setTitle($title, true);
        $this->setDescription($description, true);
        $this->setCreateDate(time(), true);

        $this->persist();
    }

}

/*****************************************************
 * Timestamp: 1523556740
 * Size (in bytes): 2253
 * Compilation Time: 13
 * 9b80ea61ffc31bb11e56c7e84098296e
 ******************************************************/