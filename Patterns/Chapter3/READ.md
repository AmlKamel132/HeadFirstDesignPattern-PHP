### chapter3

### Decorator Pattern (Structural design patterns)

------------------------------------------------------
we can't override  [getDescription()] in CondimentDecorator , i implement two solutions

* in Example1(StarBuzzCoffeFirst) You'll find getDescription throw error if you don't implement in subclass .
* in Example2(StarBuzzCoffeSecond) all subclasses of CondimentDecorator will depend on parent (CondimentDecorator) cause
  of we implement getDescription in it .
----------------------------------------------------------------
we can change Abstract Class To Interface But, i'd like to follow the same implementation that in book
_You Can Make Solution Better Than I applied_



