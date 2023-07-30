# Session

## Session Functions

- session_abort :— Discard session array changes and finish session
- session_get_cookie_params :— Get the session cookie parameters
- session_id :— Get and/or set the current session id
- session_name :— Get and/or set the current session name
- session_unset :— Free all session variables
- session_write_close :— Write session data and end session
- session_start :— Start new or resume existing session
- session_save_path :— Get and/or set the current session save path
- [Other Session Functions] (#https://www.php.net/manual/en/ref.session.php)

## The SessionHandler class

- [SessionHandler] (#https://www.php.net/manual/en/class.sessionhandler.php)

```php
define('SESSION_SAVE_PATH' , dirname(realpath(__FILE__)). DIRECTORY_SEOARATOR .'sessions');
class AppSessionHandler extends SessionHandler{
    private $sessionName = 'MYAPPSESS'; //cookie's name
    private $sessionMaxLifetime = 0; //when user close the page session =  0
    private $sessionSSL = False; //SSL protocol
    private $sessionHTTPOnly = true;
    private $sessionPath = '/';
    private $sessionDomain = '.task.com';
    private $sessionSavePath = SESSION_SAVE_PATH;


     private $sessionCipherAlgo = MCRYPT_BLOWFISH;
     private $sessionCipherMode = MCRYPT_MODE_ECB;
     private $sessionCipherKey = 'WYCRYPT0K3Y@2023';


     public function __construct(){
        ini_set('session.use_cookies',1);
        ini_set('session.use_only_cookies',1);
        ini_set('session.use_trans_sid',0); //privent an access for session by ID in URL
        ini_set('session.save_handler','files');

         session_name($this->sessionName);
            session_save_path($this->sessionSavePath );
            session_set_cookie_params(
            $this->sessionMaxLifetime,$this->sessionPath,
            $this->sessionDomain,$this->sessionHTTPOnly,
            $this->sessionSSL);


            session_set_save_handler($this,true);//set user level storage functions

    
    
         }
         public function read($id){
            return (mcrypt_encrypt($this->sessionCipherAlgo,$this->sessionCipherKey,parent::read($id),$this->sessionCipherMode));

         }

         public function write($id, $data){
            parent::write($id,mcrypt_encrypt($this->sessionCipherAlgo,$this->sessionCipherKey,$data,$this->sessionCipherMode));

         }


         public function start(){
            if('' === session_id()){
                return session_start();
            }
         }
    
    
    }
    $session = new AppSessionHandler();
    $session->start();


     











```
