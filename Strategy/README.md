Strategy
====================

##What is the meaning of strategy design pattern ?

###Problem:

Two programmers planning their wedding party.

- **The bride:** Hey babe, I'm confused how we serve the foods to guests in our wedding party next month.
I'm thinking about what if we package the foods. so the guest just take and ready to eat it.

- **The groom:** How about if the guest don't like with one of the foods or maybe allergy with that.

- **The bridge:** ahh, you are right! so do you have another option?

- **The groom:** well, don't worry. you already know about strategy design pattern, don't you ? So we have to `(1) separate and define` them
into two families "Foods" and "Drinks". We put the foods family here and the drinks family here.

- **The bridge:** I bit forget about strategy, why do you want to separate them?

- **The groom:** we provide strategy, so the `(3) "family foods" and "family drink" are interchangeable`.
and the `(2) guest has option` to change her "food" and her "drinks".



3 criteria of strategy pattern:

(1). **defines a family of algorithms.**


(2). **encapsulates each algorithm.**

```
 public function setFood(FoodInterface $food)
     {
         $this->food = $food;
     }
```

#####Note:

- The encapsulation is not more than like this code `$this->food = new Meat()`

- [What is encapsulation ?](http://stackoverflow.com/questions/985298/what-is-encapsulation-with-simple-example-in-php)



(3). **makes the algorithms interchangeable within that family.**



Other useful links about strategy:

- [phptherightway](http://www.phptherightway.com/pages/Design-Patterns.html#strategy)
- [sourcemaking](http://sourcemaking.com/design_patterns/strategy)

![strategy diagram](diagram.png?raw=true "strategy diagram")



