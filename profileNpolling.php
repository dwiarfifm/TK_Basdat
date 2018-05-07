
<!DOCTYPE html>
<html lang="en">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
<div data-tabs="1" id="i02ihx">
  <nav data-tab-container="1" class="tab-container">
    <a href="#tab1" data-tab="1" class="tab">Profile</a>
    <a href="#tab2" data-tab="1" class="tab">Polling</a>
  </nav>
  <div id="tab1" data-tab-content="1" class="tab-content">
    <div class="container">
      <div class="row">
        <div class="col-md-5 toppad pull-right col-md-offset-3">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Profile
              </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div align="center" class="col-md-3 col-lg-3">  
                </div>
                <div class="col-md-9 col-lg-9">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>
                          <b>Personal Information: 
                          </b>
                        </td>
                        <td>
                        </td>
                      </tr>
                      <tr>
                        <td>Name:
                        </td>
                        <td>Flickering Control
                        </td>
                      </tr>
                      <tr>
                        <td>Role:
                        </td>
                        <td>Student
                        </td>
                      </tr>
                      <tr>
                      </tr>
                      <tr>
                        <td>ID Number:
                        </td>
                        <td> 1789809263
                        </td>
                      </tr>
                      <tr>
                        <td>Birth Place:
                        </td>
                        <td>Manhattan
                        </td>
                      </tr>
                      <tr>
                        <td>Birth Date:
                        </td>
                        <td>09/06/2000
                        </td>
                      </tr>
                      <tr>
                        <td>Email:
                        </td>
                        <td> howlingrage@fire.com 
                        </td>
                      </tr>
                      <tr>
                        <td>Phone Number:
                        </td>
                        <td> 08190389873 
                        </td>
                      </tr>
                      <tr>
                        <td>Status:
                        </td>
                        <td> Actived 
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="#" id="iiwnls" class="btn btn-primary"> Article List</a>
                  <a href="#" id="iiwnls" class="btn btn-primary"> Homepage</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="tab2" data-tab-content="1" class="tab-content">
    <div>
      <table class="table">
        <thead>
          <tr>
            <th>ID
            </th>
            <th>Start
            </th>
            <th>Finish
            </th>
            <th>Respondents
            </th>
            <th id="i59w8p">
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1
            </td>
            <td>Mark
            </td>
            <td>Tompson
            </td>
            <td>the_mark7
            </td>
          </tr>
        </tbody>
      </table>
      <div class="pagination">
      </div>
    </div>
  </div>
</div>
<script>var items = document.querySelectorAll('#i02ihx');
  for (var i = 0, len = items.length; i < len; i++) {
    (function(){
      var t,e=this,a="[data-tab]",n=document.body,r=n.matchesSelector||n.webkitMatchesSelector||n.mozMatchesSelector||n.msMatchesSelector,o=function(){
        var a=e.querySelectorAll("[data-tab-content]")||[];
        for(t=0;t<a.length;t++)a[t].style.display="none"}
      ,i=function(n){
        var r=e.querySelectorAll(a)||[];
        for(t=0;t<r.length;t++){
          var i=r[t],s=i.className.replace("tab-active","").trim();
          i.className=s}
        o(),n.className+=" tab-active";
        var l=n.getAttribute("href"),c=e.querySelector(l);
        c&&(c.style.display="")}
      ,s=e.querySelector(".tab-active"+a);
      s=s||e.querySelector(a),s&&i(s),e.addEventListener("click",function(t){
        var e=t.target;
        r.call(e,a)&&i(e)}
                                                        )}
     .bind(items[i]))();
  }
</script>
</html>