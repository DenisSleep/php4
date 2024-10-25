<?php

class Cookie {
    private $type;

    private $availableTypes = ['шоколадное', 'ванильное', 'вишневое', 'клубничное'];

    public function setType($type) {
        if (in_array($type, $this->availableTypes)) {
            $this->type = $type;
        } else {
            throw new Exception("Недопустимый тип печенья: " . $type);
        }
    }

    public function getType() {
        return $this->type;
    }
}

try {
    $cookie = new Cookie();
    $cookie->setType('клубничное');
    echo "Тип печенья: " . $cookie->getType();
    
    $cookie->setType('ванильное');
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $cookie = new Cookie();
    $cookie->setType('яблочное');
    echo "Тип печенья: " . $cookie->getType();
    
    $cookie->setType('вишневое');
} catch (Exception $e) {
    echo $e->getMessage();
}

?>