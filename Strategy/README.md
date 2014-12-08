Strategy
====================


1. defines a family of algorithms.

    `The meaning of familiy here are classes that implementing to FoodsInterface and ToysInterface.`

2. encapsulates each algorithm.

    ```
    public function __construct()
        {
            $this->foods['meat'] = new Meat();
            $this->foods['fish'] = new Fish();

            $this->foods['catch_ball'] = new Meat();
            $this->foods['ball'] = new Fish();
        }
    ```

3. makes the algorithms interchangeable within that family.

    Interchangeable means you can change one food to another else in family food.

    ```
    public function eat($foodName)
        {
                echo $this->foods[$foodName]->display();
        }
    ```

![strategy diagram](diagram.png?raw=true "strategy diagram")



