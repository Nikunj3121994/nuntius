<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 11:24
 */

namespace App\Support\EnumBuilder\Models;


use App\Support\Helpers\SerializesObjects;

class Enum
{

    use SerializesObjects;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $subText;

    /**
     * Enum constructor.
     * @param array|null $data
     */
    public function __construct( array $data = null )
    {
        if ($data) {
            $this->id = intval($data['id']);
            $this->text = $data['text'];
            $this->subText = $data['sub_text'] ?? null;
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId( int $id ): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText( string $text ): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getSubText(): ?string
    {
        return $this->subText;
    }

    /**
     * @param string $subText
     */
    public function setSubText( string $subText ): void
    {
        $this->subText = $subText;
    }


}