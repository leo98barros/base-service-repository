<?php

namespace Src\Models;

class Model
{
    /**
     * @var array
     */
    private array $data = [
        [
            'id' => 1,
            'name' => 'Elanor Defaunt',
            'email' => 'elanor@mail.com',
        ],
        [
            'id' => 2,
            'name' => 'Adrias Mort',
            'email' => 'adrias@mail.com',
        ],
        [
            'id' => 3,
            'name' => 'Muriel Lindon',
            'email' => 'muriel@mail.com',
        ],
    ];

    /**
     * @return array
     */
    public function all()
    {
        return $this->data;
    }

    /**
     * @return string|array
     */
    public function where(string $field, string $value)
    {
        foreach ($this->data as $data) {
            if (! in_array($field, $this->data)) {
                return "Coluna '$field' não existe";
            }
    
            if (! array_search($value, $this->data)) {
                return "Nenhum dado econtrado";
            }
    
            return $data;
        }

        return 'Dado não encontrado';
    }


    public function find(int $id)
    {
        return $this;
    }

    public function update(int $id, array $data)
    {
        return $this;
    }

    public function delete(int $id)
    {
        return $this;
    }
}
