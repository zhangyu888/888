<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\xampp\htdocs\maogod\public/../application/admin\view\article\showlist.html";i:1470794222;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>文章列表</title>

       <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>common.css">
<link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>main.css?11">
<script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery-1.9.1.min.js"></script>

    </head>
    <body>
          
          
        <div id='dialog-modal'></div>
        <div class="container">
<!--     <div id="button" class="mt10">
   <input type="button" id="btn1" class="btn btn82 btn_checked" value="全选"> 
   <input type="button" id="btn2" class="btn btn82 btn_nochecked" value="取消">
   <input type="button" id="btn3" class="btn btn82 btn_del" value="删除">
   <a href="index.php/admin/article/add"><input type="button" id="btn4" class="btn btn82 btn_add" value="添加"></a>
</div> -->
    <div id="search_bar" class="mt10">
       <div class="box">

          <div class="box_border">
 
            <div class="box_top"><b class="pl15">当前位置是：文章管理->文章列表</b></div>

            <div class="box_center pt10 pb10">

              <table class="form_table" border="0" cellpadding="0" cellspacing="0">

                <tr>
                      <form action="index.php/admin/article/search" method="get">
                   
                
                 
                  <td>标题</td>
                  <td><input type="text" name="title" class="input-text lh25" size="50"></td>
                  <td><input name="sel" type="submit" value="查询" class="ext_btn ext_btn_submit"></td>
                </form>
          
                  
              
                </tr>
           </table>
            </div>
          </div>

        </div>

    </div>

     <div id="table" class="mt10">

        <div class="box span10 oh">

              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">

                <tr class="tr">

                    <th width="30">序号</th>
                    <th width="30">选择</th>
                        <th width="140">文章名称</th>
                    <th width="140">连接</th>
                        <th width="30">是否显示</th>
                 
                      
                      
                     
                        <th width="70">点击数</th>
  <th width="100">创建时间</th>
                  <th width="150">操作</th>
                   <!-- <th width="50"><a href="movie.php?weekdjs=desc" title="降序">上周点击</a></th>
                   <th width="50"><a href="movie.php?addweekdjs=desc" title="降序">本周点击</a></th>  -->

                    </tr>
                   
  <?php foreach($article_list as $v): ?>
               
                        <tr class="tr">
                             <td><?php echo $v['article_id']; ?></td>
                   <td class="td_center"><input type="checkbox" name="checkbox" value="<?php echo $v['article_id']; ?>"></td>
                   <td><a href="/index.php/admin/article/add/article_id/<?php echo $v['article_id']; ?>"><?php echo $v['article_name']; ?></a></td>
                  
              <td>手机端：<?php echo $domain; ?>/wap/article/content/id/<?php echo $v['article_id']; ?><br>电脑端：<?php echo $domain; ?>/index/article/content/id/<?php echo $v['article_id']; ?></td>
              <td><?php if($v['status']): ?>是<?php else: ?>否<?php endif; ?></td> 
            
                 
                       
        <td><?php echo $v['click']; ?></td>                   

<td><?php echo date("Y-m-d H:i",$v['create_time']); ?></td>
                    <td></a><a href="/admin/article/edit/article_id/<?php echo $v['article_id']; ?>">修改</a>|<a href="javascript:;" onclick="delete_product(<?php echo $v['article_id']; ?>)">删除</td>
                 </tr>
                    <?php endforeach; ?>


                   
                  
                  
            </table>
              <div class="page mt10">
               <div class="pagination">
             
                </div> 

              </div>

        </div>

     </div>

   </div> 


         <script type="text/javascript">
           

        
            function delete_product(id){
              if(confirm('是否删除')){
                
                  
                    location.href="/admin/article/delete/article_id/"+id;
            
              }
               
            }
          
            </script>
        
  
   
    </body>
</html>