<div class="container top">
	<div class="row">
	        <div class="col-md-3">  
				<h3 class="bg-primary">受注一覧</h3>
			</div>
	</div>
	<div class="btn-group btn-group-justified">
		<a href="#" class="btn btn-default" id="search">検索</a>
		<a href="/index.php/accepth/edit/" class="btn btn-default">新規</a>
		<a href="#" class="btn btn-default edit">修正</a>
		<a href="#" class="btn btn-default">削除</a>
		<a href="#" class="btn btn-default">コピー</a>
		<a href="#" class="btn btn-default">参照</a>
		<a href="#" class="btn btn-default">印刷</a>
		<a href="#" class="btn btn-default">CSV</a>
		<a href="#" class="btn btn-default">発注登録</a>
		<a href="#" class="btn btn-default">取消</a>
		<a href="#" class="btn btn-default">閉じる</a>
	</div>
	<div class="btn-group btn-group-justified">
		<a href="#" class="btn btn-primary">F1</a>
		<a href="#" class="btn btn-primary">F3</a>
		<a href="#" class="btn btn-primary">F5</a>
		<a href="#" class="btn btn-primary">F6</a>
		<a href="#" class="btn btn-primary"></a>
		<a href="#" class="btn btn-primary"></a>
		<a href="#" class="btn btn-primary">F7</a>
		<a href="#" class="btn btn-primary"></a>
		<a href="#" class="btn btn-primary"></a>
		<a href="#" class="btn btn-primary">F11</a>
		<a href="#" class="btn btn-primary">F12</a>
	</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">                
                <div class="panel panel-default">
					<div class="panel-heading clearfix">
						<div class="box pull-left">
					<table border="0" cellspacing="5" cellpadding="5">
						<tbody>
							<tr>
								<th>受注番号</th>
								<td><input type="text" size="10" id="" name="min"></td>
							</tr>
							<tr>
								<th>得意先コード</th>
								<td><input type="text" id="code" name="max"></td><td><input type="text" id="custname" readonly="readonly"></td>
							</tr>
							<tr>
								<th>担当者</th>
								<td><input type="text" id="" name="min"></td>
							</tr>
							<tr>
								<th>完了区分</th>
								<td>
									<SELECT>
										<?php foreach($consts['ENDKB'] as $key => $val): ?>
										<OPTION value="<?php echo $key; ?>" <?php echo $key=='0'?'selected':''; ?>><?php echo $val; ?></OPTION>
										<?php endforeach; ?>
									</SELECT>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="box pull-right">
					<table border="0" cellspacing="5" cellpadding="5">
						<tbody>
							<tr>
								<th>受注日</th>
								<td><input type="text" class="datetimepicker" id="min" name="min"></td>
								<td class="short">～</td>
								<td><input type="text" class="datetimepicker" id="max" name="max"></td>
							</tr>
							<tr>
								<th>納期</th>
								<td><input type="text" class="datetimepicker" name="min"></td>
								<td class="short">～</td>
								<td><input type="text" class="datetimepicker" name="min"></td>
							</tr>
							<tr>
								<th>出荷予定日</th>
								<td><input type="text" class="datetimepicker" name="min"></td>
								<td class="short">～</td>
								<td><input type="text" class="datetimepicker" name="min"></td>
							</tr>
							<tr>
								<th>更新日</td>
								<td><input type="text" class="datetimepicker" name="min"></td>
								<td class="short">～</td>
								<td><input type="text" class="datetimepicker" name="min"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
						  <table class="table table-bordered hover" style="table-layout:fixed" id="example">
							    <thead>
							      <tr class="bg-primary">
							        <th width="10px">No</th>
							        <th width="70px">受注番号</th>
							        <th width="70px">受注状態</th>
							        <th width="100px">得意先コード</th>
							        <th width="200px">得意先名</th>
							        <th width="80px">受注日</th>
							        <th width="70px">完了区分</th>
							        <th width="80px">納期</th>
							        <th width="80px">出荷予定日</th>
							        <th width="100px">納入先コード</th>
							        <th width="200px">納入先名</th>
							        
							        <th width="100px">担当者</th>
							        <th width="100px">担当者名</th>
							        <th width="100px">金額計</th>
							        <th width="100px">受注金額</th>
							        <th width="120px">相手先発注番号</th>
							        <th width="100px">見積番号</th>
							        <th width="100px">備考</th>
							        <th width="100px">更新日</th>
							      </tr>
							    </thead>
							    <tbody>
							    <?php  foreach($accepths as $key => $val){ ?>
							    <?php //print_r($val);?>
							      <tr>
							      	<td class="right"></td>
									<td data-accno="<?php echo $val['Accepth']['ACCNO']; ?>"><?php echo $val['Accepth']['ACCNO']; ?></td>
									<td width="70px"><?php echo '受注'; ?></td>
									<td><?php echo $val['Accepth']['CUSTCD']; ?></td>
									<td><?php echo $custs[$val['Accepth']['CUSTCD']]; ?></td>
									<td class="right"><?php echo $val['Accepth']['ACCDT'] != '0000-00-00 00:00:00' ? date('Y/m/d', strtotime($val['Accepth']['ACCDT'])) : "-"; ?></td>
									<td><?php echo empty($val['Accepth']['ENDKB']) ? '未完了' : $consts['ENDKB'][$val['Accepth']['ENDKB']]; ?></td>
									<td class="right"><?php echo $val['Accepth']['RETURNDT'] != '0000-00-00 00:00:00' ? date('Y/m/d', strtotime($val['Accepth']['RETURNDT'])) : "-"; ?></td>
									<td class="right"><?php echo $val['Accepth']['SHIDT'] != '0000-00-00 00:00:00' ? date('Y/m/d', strtotime($val['Accepth']['SHIDT'])) : "-"; ?></td>
									<td><?php echo $val['Accepth']['CUSTCD3']; ?></td>
									<td><?php echo $val['Accepth']['CUSTNM3']; ?></td>
									
									<td><?php echo $val['Accepth']['PERSONCD']; ?></td>
									<td><?php echo $val['Accepth']['INSUSER']; ?></td>
									<td class="right"><?php echo sprintf("%01.2f",$val['Accepth']['TOTAL']); ?></td>
									<td class="right"><?php echo sprintf("%01.2f",$val['Accepth']['AMT']); ?></td>
									<td><?php echo $val['Accepth']['CUATACCNO']; ?></td>
									<td><?php echo $val['Accepth']['ESTNO']; ?></td>
									<td><?php echo $val['Accepth']['BIKO']; ?></td>
									<td class="right"><?php echo $val['Accepth']['UPDDT']; ?></td>
							      </tr>
							    <?php } ?>
							    </tbody>
							  </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->Html->script(array('functionkey')); ?>
