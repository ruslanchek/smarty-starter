<?php
    Class Test extends Core {
        public function __construct(){
            $this->init(array(
                'name'  => 'test',
                'title' => 'Test'
            ));

            if($this->ajax_mode){
                switch($_GET['action']){
                    case 'test' : {
                        print json_encode($this->test());
                    }; break;
                };
            };
        }

        public function __destruct(){
            $this->deInit();
        }

        private function test(){
            return json_encode(array('test' => 'test'));
        }
    };
?>