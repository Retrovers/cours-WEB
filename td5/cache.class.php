<?php
class Cache {
    private $page;
    private $expiration;
    private $buffer;

    public function __construct($page) {
        $this->setPage($page);
    }

    public function getBuffer()
    {
        return $this->buffer;
    }

    public function setBuffer($buffer)
    {
        $this->buffer = $buffer;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getExpiration()
    {
        return filemtime('cache/' . $this->getPage() . '.html');
    }

    public function cacheView() {
        $page = $this->getPage();
        if (file_exists(('cache/') . $page . '.html')){
            if ($this->getExpiration() < time() + 3600) {
                $this->setBuffer(readfile('cache/' . $this->getPage() . '.html'));
            } else {
                echo '<p>Le contenu vient d\'etre mis en cache car le fichier a 1heure d\'ancienneté.</p>';
            }
        } else {
            echo '<p>Le contenu vient d\'etre mis en cache car le fichier de cache n\'existe pas.</p>';
        }
    }

    public function startBuffer() {
        ob_start();
    }

    public function endBuffer() {
        $this->setBuffer(ob_get_contents());
        file_put_contents('cache/' . $this->getPage() .'.html', $this->getBuffer());
        ob_end_clean();
    }

}