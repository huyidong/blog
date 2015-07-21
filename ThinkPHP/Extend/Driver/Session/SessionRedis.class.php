        <?php
        class SessionRedis {
        private $Redis;
        private $expire;
        public function execute() {
        session_set_save_handler(array(&$this,"open"),
        array(&$this,"close"),
        array(&$this,"read"),
        array(&$this,"write"),
        array(&$this,"destroy"),
        array(&$this,"gc"));
        }
        public function open($path,$name){
        $this->expire=C('SESSION_EXPIRE')?C('SESSION_EXPIRE'):ini_get('session.gc_maxlifetime');
        $this->Redis=new Redis();
        return $this->Redis->connect(C('REDIS_HOST'),C('REDIS_PORT'));
        }
        public function close(){
        return $this->Redis->close();
        }
        public function read($id){
        $id=C('SESSION_PREFIX').$id;
        $data=$this->Redis->get($id);
        return $data?$data:'';
        }
        public function write($id,$data){
        $id=C('SESSION_PREFIX').$id;
        return $this->Redis->set($id,$data,$this->expire);
        }
        public function destroy($id){
        $id=C('SESSION_PREFIX').$id;
        return $this->Redis->delete($id);
        }
        public function gc(){
        return true;
        }
        }
        ?>