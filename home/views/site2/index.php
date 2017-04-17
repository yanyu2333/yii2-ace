
<div class="panel panel-warning">
    <!-- panel heading -->
    <div class="panel-heading">
        <h2>1</h2>
    </div>
    <!-- panel body -->
    <div class="panel-body">
        <div class="row">
            <form action="/bill-convert-alipay/index" method="get" id="formSearch" class="form-inline">
                <div class="col-sm-10 col-md-10 col-lg-10">
                    账号: <input type="text" class="form-control" id="account" name="account"/>
                    姓名: <input type="text" class="form-control" id="name" name="name"/>
                    <button class="btn btn-primary" type="submit" id="btn_search">
                        <span class="glyphicon glyphicon-search"></span>
                        <span>搜索</span>
                    </button>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 text-right">
                </div>
                <input type="hidden" id="hidden_tab_type" name="hidden_tab_type"/>
            </form>
        </div><hr>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <nav class="nav-tabs" role="navigation">
                    <div>
                        <ul class="nav nav-tabs" id="tab_type">
                            <li id="tab_type_1"><a href="#">审核中</a></li>
                            <li id="tab_type_2"><a href="#">处理成功</a></li>
                            <li id="tab_type_3"><a href="#">处理失败</a></li>
                        </ul>
                    </div>
                </nav><br/>
                <table id="tbl" class="table table-striped table-bordered gclass_table text-center">
                    <thead>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td class="gclass_font_bold_red">实际可以转出现金数</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- panel footer -->
    <div class="panel-footer">
    </div>
</div>

<div id="modalRejectConvert" class="modal fade" >
    <div class="modal-dialog gclass_modal_md" >
        <div class="modal-content">
            <div class="modal-header">
                <span>拒绝原因</span>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form id="formRejectConvert" action="#" method="post" enctype="multipart/form-data" class="form-inline">
                <div class="modal-body" >
                    <div class="input-group">
                        <span class="input-group-addon">1：</span>
                        <textarea class="form-control gclass_textarea_full" name="reject_cause" id="reject_cause"></textarea>
                    </div><br /><br />
                    <div class="input-group">
                        <span class="input-group-addon">2：</span>
                        <select id="reject_return" name="reject_return" class="form-control">
                            <option value="0">3</option>
                            <option value="1">4</option>
                        </select>
                    </div><br />
                    <input type="hidden" id="reject_bcaid" name="reject_bcaid"/>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="btn_submit_reject">提交</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
                </div>
            </form>
        </div>
    </div>
</div>
