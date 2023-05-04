<?

namespace src;

class EmailService
{
    private $de;
    private $para;
    private $assunto;
    private $contedudo;    

    public function __construct(string $de, string $para, string $assunto, string $conteudo)
    {
        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->contedudo = $conteudo;
    }

    public function enviarEmail() 
    {
        return '.... envia e-mail ...';
    }
}
