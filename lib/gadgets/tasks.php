<?php
class Gadgets
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'serial_number' => 'Serial Number',
            'model' => 'First Name',
            'make' => 'Last Name',
            'charger' => 'Gender',
            'color' => 'Phone',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at'
        ];

        return $ordering;
    }
}
?>
