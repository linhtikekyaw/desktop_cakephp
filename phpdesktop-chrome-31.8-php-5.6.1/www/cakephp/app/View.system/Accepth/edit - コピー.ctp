<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-bookmark"></span>受注入力</h3>
                </div>
                <div class="col-md-12">            
                          <div class="btn-group btn-group-justified">
						    <a href="#" class="btn btn-default"><-前</a>
						    <a href="#" class="btn btn-default">次-></a>
						    <a href="#" class="btn btn-default" id="update">更新</a>
						    <a href="#" class="btn btn-default" id="test">取消</a>
						    <a href="#" class="btn btn-default">閉じる</a>
						  </div>
						  <br><br><hr>
					 <div class="col-md-12 pull-left">
						  <table border="0" cellspacing="5" cellpadding="5" class="accepth">
						<tbody>
							<tr>
								<td>受注番号</td>
								<td><input type="text" id="" class="ACCNO" readonly="readonly" name="ACCNO" value="<?php if(!empty($data)): echo $data['Accepth']['ACCNO']; endif; ?>"></td>
							</tr>
						</tbody>
					</table>
					</div>
						 <div class="col-md-5 pull-left">				
					<table border="0" cellspacing="5" cellpadding="5" class="accepth">
						<tbody>
							<tr>
								<td>見積番号</td>
								<td><input type="text" id="" class="ESTNO" name="ESTNO" value="<?php if(!empty($data)): echo $data['Accepth']['ESTNO']; endif; ?>"></td>
							</tr>
							<tr>
								<td>得意先コード</td>
								<td><input type="text" id="code" class="CUSTCD" name="CUSTCD" value="<?php if(!empty($data)): echo $data['Accepth']['CUSTCD']; endif; ?>"></td><td><input type="text" id="custname" value="<?php if(!empty($data)): echo $data['Accepth']['CUSTNM']; endif; ?>" readonly="readonly"></td>
							</tr>
							<tr>
								<td>納入先コード</td>
								<td><input type="text" id="" class="CUSTCD3" name="CUSTCD3" value="<?php if(!empty($data)): echo $data['Accepth']['CUSTCD3']; endif; ?>"></td>
							</tr>
							<tr>
								<td>納入先名</td>
								<td>
									<input type="text" id="" class="CUSTNM3" name="CUSTNM3" value="<?php if(!empty($data)): echo $data['Accepth']['CUSTNM3']; endif; ?>">
								</td>
							</tr>
							<tr>
								<td>相手先発注番号</td>
								<td>
									<input type="text" id="" class="CUATACCNO" name="CUATACCNO" value="<?php if(!empty($data)): echo $data['Accepth']['CUATACCNO']; endif; ?>">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-5 pull-right">
					<table border="0" cellspacing="5" cellpadding="5" id="data_form" class="accepth">
						<tbody>
							<tr>
								<td>受注日</td>
								<td><input type="text" class="datetimepicker ACCDT" id="ACCDT" name="ACCDT" value="<?php if(!empty($data)): echo date('Y/m/d', strtotime($data['Accepth']['ACCDT'])); endif; ?>"></td>
							</tr>
							<tr>
								<td>納期</td>
								<td><input type="text" class="datetimepicker RETURNDT" name="RETURNDT" value="<?php if(!empty($data)): echo date('Y/m/d', strtotime($data['Accepth']['RETURNDT'])); endif; ?>"></td>
							</tr>
							<tr>
								<td>出荷予定日</td>
								<td><input type="text" class="datetimepicker SHIDT" name="SHIDT" value="<?php if(!empty($data)): echo date('Y/m/d', strtotime($data['Accepth']['SHIDT'])); endif; ?>"></td>
							</tr>
							<tr>
								<td>担当者</td>
								<td><input type="text" class="PERSONCD" name="PERSONCD" value="<?php if(!empty($data)): echo $data['Accepth']['PERSONCD']; endif; ?>"></td>
							</tr>
							<tr>
								<td>伝票備考</td>
								<td><input type="text" class="BIKO" name="BIKO" value="<?php if(!empty($data)): echo $data['Accepth']['BIKO']; endif; ?>"></td>
							</tr>
							<tr>
								<td>完了区分</td>
								<td>
								<?php foreach($consts['ENDKB'] as $key => $val): ?>
									<?php $check= !empty($data)?$data['Accepth']['ENDKB']:'0'; ?>
									<label><input type="radio" class="ENDKB" name="ENDKB" value="<?php echo $key; ?>" <?php echo $key==$check ? 'checked':''; ?>><?php echo $val; ?></label>&nbsp;
								<?php endforeach; ?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
						  <table class="table table-striped table-bordered hover" style="table-layout:fixed" id="add_new">
							    <thead>
							      <tr>
							        <th rowspan="2">No</th>
							        <th>明細区部</th>
							        <th>商品コード</th>
							        <th>商品名</th>
							        <th>ケース数</th>
							        <th>入数</th>
							        <th>販売単価</th>
							        <th>金額</th>
							        <th rowspan="2">備考</th>
							        <th rowspan="2"></th>
							      </tr>
							      <tr>
							        <th>税区分</th>
							        <th></th>
							        <th>規格</th>
							        <th>バラ数</th>
							        <th>単位</th>
							        <th>標準単価</th>
							        <th></th>
							      </tr>
							    </thead>
							    <tbody>
							    <?php if(empty($data['Acceptd'])): ?>
							    	<tr>
									<td rowspan="2"></td>
									<td class="LINCLS">
									<SELECT name="LINCLS">
										<?php foreach($consts['CODR'] as $num => $name): ?>
										<OPTION value="<?php echo $num; ?>" <?php echo $num=='1'?'selected':''; ?>><?php echo $name; ?></OPTION>
										<?php endforeach; ?>
									</SELECT>
									</td>
									<td class="ITEMCD"></td>
									<td class="ITEMNM1"></td>
									<td class="CAQTY"></td>
									<td class="IRQTY"></td>
									<td class="SALPRC"></td>
									<td class="AMT"></td>
									<td class="BIKO1"></td>
									<td rowspan="2"><button class="btn btn-primary add_record">追加</button><button class="btn btn-danger del_record">削除</button></td>
							      </tr>
							      <tr>
									<td class="TAXKB">
									<SELECT name="TAXKB">
										<?php foreach($consts['TAXKB'] as $num => $name): ?>
										<OPTION value="<?php echo $num; ?>" <?php echo $num=='1'?'selected':''; ?>><?php echo $name; ?></OPTION>
										<?php endforeach; ?>
									</SELECT>
									</td>
									<td></td>
									<td class="ITEMNM2"></td>
									<td class="BAQTY"></td>
									<td class="UNIT"></td>
									<td class="PRC"></td>
									<td></td>
									<td class="BIKO2"></td>
							      </tr>
							    <?php else: ?>
							    <?php foreach($data['Acceptd'] as $key => $val){;?>
								<tr>
									<td rowspan="2"></td>
									<td class="LINCLS">
									<SELECT name="LINCLS">
										<?php foreach($consts['CODR'] as $num => $name): ?>
										<OPTION value="<?php echo $num; ?>" <?php echo $num==$val['LINCLS']?'selected':''; ?>><?php echo $name; ?></OPTION>
										<?php endforeach; ?>
									</SELECT>
									</td>
									<td class="ITEMCD"><?php echo $val['ITEMCD']; ?></td>
									<td class="ITEMNM1"><?php echo $val['ITEMNM1']; ?></td>
									<td class="CAQTY"><?php echo floor($val['CAQTY']); ?></td>
									<td class="IRQTY"><?php echo floor($val['IRQTY']); ?></td>
									<td class="SALPRC"><?php echo sprintf("%01.2f",$val['SALPRC']); ?></td>
									<td class="AMT"><?php echo sprintf("%01.2f",$val['AMT']); ?></td>
									<td class="BIKO1"><?php echo $val['BIKO1']; ?></td>
									<td rowspan="2"><button class="btn btn-primary add_record">追加</button><button class="btn btn-danger del_record">削除</button></td>
							      </tr>
							      <tr>
									<td class="TAXKB">
									<SELECT name="TAXKB">
										<?php foreach($consts['TAXKB'] as $num => $name): ?>
										<OPTION value="<?php echo $num; ?>" <?php echo $num==$val['TAXKB']?'selected':''; ?>><?php echo $name; ?></OPTION>
										<?php endforeach; ?>
									</SELECT>
									</td>
									<td></td>
									<td class="ITEMNM2"><?php echo $val['ITEMNM2']; ?></td>
									<td class="BAQTY"><?php echo floor($val['BAQTY']); ?></td>
									<td class="UNIT"><?php echo $val['UNIT']; ?></td>
									<td class="PRC"><?php echo sprintf("%01.2f", $val['PRC']); ?></td>
									<td></td>
									<td class="BIKO2"><?php echo $val['BIKO2']; ?></td>
							      </tr>
								<?php } ?>
								<?php endif; ?>
							    </tbody>
							  </table>
							  <div class="col-md-3 pull-right">				
					<table border="0" cellspacing="5" cellpadding="5" class="accepth">
						<tbody>
							<tr>
								<th class="bg-primary">合計金額</th>
								<td><input type="text" id="total" class="TOTAL" name="TOTAL" value="<?php if(!empty($data)): echo sprintf("%01.2f",$data['Accepth']['TOTAL']); endif; ?>" readonly="readonly"></td>
							</tr>
						</tbody>
					</table>
				</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->Html->script(array('item')); ?>