/**
 * @Description:
 * @Author : DongYue
 * @Email ：lijiadongyue@gmail.com
 * @Date :2016-08-08.11:28.
 */
/**
 * Created with WebStorm.
 * Author: qiang.niu(http://www.siptea.cn)
 * Date: 2015/10/29 14:04
 */
window.onload = function() {
    map.plugin(["AMap.ToolBar"], function() {
        map.addControl(new AMap.ToolBar());
    });
}