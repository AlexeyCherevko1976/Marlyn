
  <div ng-controller="mainCtrl">
    <div class='d1'>
      <div style="float: left; display: inline; ">{{nomer1.firstValue}}</div>
      <div style="float: left; display: inline; ">{{nomer1.sign}}</div>
      <div style="float: left; display: inline; ">{{nomer1.secondValue}}</div>
      <div style="float: left; display: inline; ">=</div>
         
    </div>

    <div class='d2'>
       <div class='d21'>{{nomer1.comment}}</div>
       <input type='text' class='d23'  id="text1" ng-model='nomer1.valueReturn'  ng-keypress="checkkey($event, nomer1)" >
       <input type='button' ng-click='setSelection(nomer1)' value='{{setTimer}}'>
       <!-- <div class='d22'>{{timeSec}}</div> -->
    </div>
    <div class='d2'>
        <div>Число правильных ответов - {{nomer1.correctReturn}}, {{nomer1.percentCorrectAnswer}}%, {{nomer1.meanTimeCount}} сек</div>
        <div>Число неправильных ответов - {{nomer1.invalidReturn}} </div>
    </div>
    
  </div>

 
  <script type="text/javascript">

  </script>

