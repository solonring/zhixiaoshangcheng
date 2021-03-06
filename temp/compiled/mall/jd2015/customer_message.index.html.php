<?php echo $this->fetch('header.html'); ?>


<style>
    #customer_message{background: #efefef;}
    #customer_message .purpose_wrap{background: #fff;border: 1px solid #e4e4e4;margin:30px auto;}
    #customer_message .purpose_wrap h3 {width: 90px;margin-top: -1px;padding-left: 10px;border-top: 2px solid #5288d0;font-size: 16px;line-height: 40px;color: #555555;}
    #customer_message .purpose_wrap .purpose_box{margin: 0 10px;padding: 0 10px;border-top: 1px solid #e9e9e9;}
    #customer_message .purpose_wrap .purpose_box .from_left_wrap{float: left;width: 570px;padding: 10px 0;}
    #customer_message .purpose_wrap .purpose_box .from_left_wrap p {line-height: 24px;}
    #customer_message .purpose_wrap .purpose_box .from_left_wrap .txt_area {position: relative;height: 170px;margin-top: 10px;border: 1px solid #bbbbbb;}
    #customer_message .purpose_wrap .purpose_box .from_left_wrap .txt_area textarea {width: 558px;height: 130px;overflow: auto;padding: 5px;border: 0px none;}
    #customer_message .purpose_wrap .purpose_box .from_right_wrap{float: left;width: 540px;margin-top: 63px;}
    #customer_message .purpose_wrap .purpose_box .from_right_wrap li {position: relative;margin-bottom: 15px;padding-left: 105px;line-height: 30px;height: 30px;}
    #customer_message .purpose_wrap .purpose_box .from_right_wrap li label {float: left;_display: inline;width: 105px;margin-left: -105px;text-align: right;}
    #customer_message .purpose_wrap .purpose_box .from_right_wrap li .ipt {width: 198px;height: 28px;padding-left: 3px;border: 1px solid #bbbbbb;vertical-align: middle;line-height: 28px;margin-right: 5px;}
    #customer_message .purpose_wrap .purpose_box .from_right_wrap li .summit{border:none;width: 148px;height: 34px;line-height: 34px;text-align: center;color: #fff;background: #e40f23;font-size: 22px;border-radius: 3px;}
</style>
<div id="customer_message" class="clearfix">
    <div class="purpose_wrap w">
        <h3>意见投诉</h3>
        <div class="purpose_box clearfix">
            <form method="post">
                <div class="from_left_wrap">
                    <p>意见投诉：请您填写意见投诉，专业客户经理将在第一时间与您联系</p>
                    <p>投诉售后问题还可统一拨打客服热线400-007-1111（每日09:00—21:00）</p>
                    <div class="txt_area">
                        <textarea id="message" name="message"></textarea>
                    </div>
                </div>
                <div class="from_right_wrap">
                    <ul>
                        <?php if ($this->_var['type'] == '1'): ?>
                        <li>
                            <label>意见建议：</label>
                        </li>
                        <?php endif; ?>
                        <?php if ($this->_var['type'] == '2'): ?>
                        <li>
                            <label>投诉店铺：</label>
                            <?php echo htmlspecialchars($this->_var['store']['store_name']); ?>
                        </li>
                        <?php endif; ?>
                        <?php if ($this->_var['type'] == '3'): ?>
                        <li>
                            <label>投诉商品：</label>
                            <?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>
                        </li>
                        <?php endif; ?>
                        <li>
                            <label>联系人姓名：</label>
                            <input type="text" id="realname" name="realname" value="" maxlength="5" class="ipt">
                        </li>
                        <li>
                            <label>联系电话：</label>
                            <input type="text" id="mobile" name="mobile" value="" maxlength="11" class="ipt">
                        </li>
                        <li>
                            <label></label>
                            <input type="submit" class="summit"/>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>



<?php echo $this->fetch('footer.html'); ?>