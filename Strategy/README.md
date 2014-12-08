Strategy
====================

####What is the meaning of strategy design pattern ?

it's only need 3 criteria that you have to do:

1. **defines a family of algorithms.**

    ```
    The meaning of family here are classes that implementing to FoodsInterface and ToysInterface.
    So, there are two families here :)
    ```

2. **encapsulates each algorithm.**

    ```
    public function __construct()
        {
            $this->foods['meat'] = new Meat();
            $this->foods['fish'] = new Fish();

            $this->foods['catch_ball'] = new Meat();
            $this->foods['ball'] = new Fish();
        }
    ```

    The encapsulation means only like this codes `$this->foods['meat'] = new Meat()` so **You dont need to write the code like above**

    [What is encapsulation ?](http://stackoverflow.com/questions/985298/what-is-encapsulation-with-simple-example-in-php)

3. **makes the algorithms interchangeable within that family.**

    Interchangeable means you can change one food to another else in family food.

    ```
    public function eat($foodName)
        {
                echo $this->foods[$foodName]->display();
        }
    ```

Other usefull links about strategy:

- [phptherightway](http://www.phptherightway.com/pages/Design-Patterns.html#strategy)
- [sourcemaking](http://sourcemaking.com/design_patterns/strategy)

![strategy diagram](diagram.png?raw=true "strategy diagram")



