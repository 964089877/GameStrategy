<?php
namespace app\index\controller;

use app\admin\model\Game;
use think\Controller;
use app\admin\model\Information;

class Index extends Controller
{
    public function index()
    {
        return view();
    }
    public function hostgame_index()
    {
        $game = new Game();
        $info = new Information();
        
        $infosh1 = $info->limit(1)->select();
        $infosh2 = $info->order('infoClick desc')->limit(1)->select();
        $infos1 = $info->limit(2,4)->select();
        $infos2 = $info->limit(6,4)->select();
        $this->assign('infosh1',$infosh1);
        $this->assign('infosh2',$infosh2);
        $this->assign('infos1',$infos1);
        $this->assign('infos2',$infos2);
        
        
        //热门游戏
        $hotgames = $game->limit(1,5)->select();
        $this->assign('hotgames',$hotgames);
        //新游上市
        $newgames = $game->order('gameID desc')->where("gamePlat LIKE '%PS4%'")->limit(5)->select();
        $this->assign('newgames',$newgames);
        //XBOX热门
        $xboxgames = $game->where("gamePlat LIKE '%XBOX%'")->limit(5)->select();
        $this->assign('xboxgames',$xboxgames);
        //PS4热门
        $ps4games = $game->where("gamePlat LIKE '%PS4%'")->limit(5)->select();
        $this->assign('ps4games',$ps4games);
        //Wii游戏
        $wiigames = $game->where("gamePlat LIKE '%Wii%'")->limit(5)->select();
        $this->assign('wiigames',$wiigames);
        //NS推荐
        $nsgames = $game->where("gamePlat LIKE '%NS%'")->limit(5)->select();
        $this->assign('nsgames',$nsgames);
        
      
        return view();
    }
    public function onlinegame_index()
    {
        $game = new Game();
        $info = new Information();
        
        $infosh1 = $info->limit(1)->select();
        $infosh2 = $info->order('infoClick desc')->limit(1)->select();
        $infos1 = $info->limit(2,4)->select();
        $infos2 = $info->limit(6,4)->select();
        $this->assign('infosh1',$infosh1);
        $this->assign('infosh2',$infosh2);
        $this->assign('infos1',$infos1);
        $this->assign('infos2',$infos2);
        
        
        //热门游戏
        $hotgames = $game->limit(1,5)->select();
        $this->assign('hotgames',$hotgames);
        //新游上市
        $newgames = $game->order('gameID desc')->limit(5)->select();
        $this->assign('newgames',$newgames);
        //角色扮演
        $rpggames = $game->where("gameType = 'RPG'")->limit(5)->select();
        $this->assign('rpggames',$rpggames);
        //动作游戏
        $actgames = $game->where("gameType = 'ACT'")->limit(5)->select();
        $this->assign('actgames',$actgames);
        //竞技游戏
        $mobagames = $game->where("gameType = 'MOBA'")->limit(5)->select();
        $this->assign('mobagames',$mobagames);
        //休闲游戏
        $fpsgames = $game->where("gameType = 'FPS'")->limit(5)->select();
        $this->assign('fpsgames',$fpsgames);

        
        
        return view();
    }
    public function mobilegame_index()
    {
        $game = new Game();
        $info = new Information();
        
        $infosh1 = $info->limit(1)->select();
        $infosh2 = $info->order('infoClick desc')->limit(1)->select();
        $infos1 = $info->limit(2,4)->select();
        $infos2 = $info->limit(6,4)->select();
        $this->assign('infosh1',$infosh1);
        $this->assign('infosh2',$infosh2);
        $this->assign('infos1',$infos1);
        $this->assign('infos2',$infos2);
        
        
        //热门游戏
        $hotgames = $game->limit(1,5)->select();
        $this->assign('hotgames',$hotgames);
        //新游上市
        $rpggames = $game->where("gameType = 'RPG'")->limit(5)->select();
        $this->assign('rpggames',$rpggames);
        //角色扮演
        $rtsgames = $game->where("gameType = 'RST'")->limit(5)->select();
        $this->assign('rtsgames',$rtsgames);
        //动作游戏
        $actgames = $game->where("gameType = 'ACT'")->limit(5)->select();
        $this->assign('actgames',$actgames);
        //模拟经营
        $racgames = $game->where("gameType = 'RAC'")->limit(5)->select();
        $this->assign('racgames',$racgames);
        //策略益智
        $fpsgames = $game->where("gameType = 'FPS'")->limit(5)->select();
        $this->assign('fpsgames',$fpsgames);
        //冒险游戏
        $avggames = $game->where("gameType = 'AVG'")->limit(5)->select();
        $this->assign('avggames',$avggames);
        //桌游棋牌
        $spggames = $game->where("gameType = 'SPG'")->limit(5)->select();
        $this->assign('spggames',$spggames);
        
        
        return view();
    }
    public function singlegame_index()
    {
        $game = new Game();
        $info = new Information();
        
        $infosh1 = $info->limit(1)->select();
        $infosh2 = $info->order('infoClick desc')->limit(1)->select();
        $infos1 = $info->limit(2,4)->select();
        $infos2 = $info->limit(6,4)->select();
        $this->assign('infosh1',$infosh1);
        $this->assign('infosh2',$infosh2);
        $this->assign('infos1',$infos1);
        $this->assign('infos2',$infos2);
        
        
        //热门游戏
        $hotgames = $game->limit(1,5)->select();
        $this->assign('hotgames',$hotgames);
        //角色扮演游戏
        $rpggames = $game->where("gameType = 'RPG'")->limit(5)->select();
        $this->assign('rpggames',$rpggames);
        //即时战略游戏
        $rtsgames = $game->where("gameType = 'RST'")->limit(5)->select();
        $this->assign('rtsgames',$rtsgames);
        //动作游戏
        $actgames = $game->where("gameType = 'ACT'")->limit(5)->select();
        $this->assign('actgames',$actgames);
        //竞速游戏
        $racgames = $game->where("gameType = 'RAC'")->limit(5)->select();
        $this->assign('racgames',$racgames);
        //射击游戏
        $fpsgames = $game->where("gameType = 'FPS'")->limit(5)->select();
        $this->assign('fpsgames',$fpsgames);
        //冒险游戏
        $avggames = $game->where("gameType = 'AVG'")->limit(5)->select();
        $this->assign('avggames',$avggames);
        //体育游戏
        $spggames = $game->where("gameType = 'SPG'")->limit(5)->select();
        $this->assign('spggames',$spggames);
     
        return view();
    }
}
