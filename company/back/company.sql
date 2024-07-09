-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-06-15 10:53:15
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `company`
--

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(20) DEFAULT NULL,
  `date` date NOT NULL,
  `poster` varchar(10) NOT NULL,
  `state` enum('上線','下線') NOT NULL DEFAULT '下線'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `photo`, `date`, `poster`, `state`) VALUES
(4, '機上脫鞋不是奧客！資深空服員曝驚人真相 最怕乘客穿「這顏色」襪子', '很多人都有出國搭機的經驗，若是搭乘10幾個小時的長途飛行，許多乘客都會忍不住將鞋子脫掉放鬆足部。對此，英國一名資深空服員表示，在機上脫鞋是正確作法，接著更呼籲搭機時最好不穿這些顏色的襪子，認了「是個頗為麻煩的情況」。\n\n根據《CNN》報導，資歷25年的英國資深空服員梅傑（Kris Major）受訪時表示，許多乘客會在搭機途中脫掉鞋子伸展雙足，坦言空服員實際上也會這樣做，因為有利血液循環，認證「搭乘長途航班這是正確做法」。\n\n梅傑指出，脫鞋後需要擔心的點，就是擔心有腳臭的乘客讓異味飄滿機艙，提醒若有需要可以到洗手間試圖解決該情況。\n\n梅傑表示，比起腳臭，空服員更擔心的其實是乘客穿深色襪子並把腳伸到走道，「特別是夜間航班，倘若乘客穿著深色襪子的腳伸到走道上，我們可能看不到，還會因此絆倒，這對我們空服員而言是個頗為麻煩的情況」。\n\n除此之外，過去曾擔任空服員的庫納（Tony Kuna）則表示，飛行途中最好別光著雙腳，因為若不慎碰到緊急情況，地板充滿碎片，光腳走路恐造成傷害，「如果雙足缺乏適當保護，維持安全會很困難。」', '20240615085436.webp', '2024-06-15', '三立新聞網', '上線'),
(5, '受嚴重洪災打擊…巴西「氣候變遷」關鍵詞搜尋量爆增9成 專家：民眾開始有意識111', '111\r\n\r\n與去年5月相比，今年5月「氣候變遷」關鍵詞的搜尋量在巴西幾乎翻了一倍，不少專家認為，許多民眾已經開始意識到了災難性的問題，人們將面臨著高風險情況。\r\n\r\n根據《BBC》的報導，依Google Trends的資料分析顯示，今年5月，由於巴西南大河州（Rio Grande do Sul）發生了當地史上最嚴重的洪災，全州超過9成的城市受到影響，導致「氣候變遷」成為最熱門關鍵詞，並在全巴西瘋狂成長90%，尤其南大河州和聯邦特區巴西利亞對這一詞的搜尋量更成長了200%。\r\n\r\n聖保羅大學（USP）物理研究所教授兼政府間氣候變遷問題小組（IPCC）的專家保羅（Paulo Artaxo）指出，這項調查表明人們已經開始意識到，從氣候緊急情況的角度來看，大家正面臨著高風險的局面。\r\n\r\n報導指出，巴西人在Google搜尋「氣候變遷」一詞時，相關字詞又以「如何避免氣候變遷」被搜尋最多。對此，保羅也表示，民眾發現問題並想要立即尋求解決方案，但答案並不向大多數人希望的那樣簡單或直接。\r\n\r\n除此之外，由於Google Trends提高了各州對於「氣候變遷」關鍵詞的搜尋興趣，如森林砍伐面積最多的帕拉州（Pará）、馬托格羅索州（Mato Grosso）等等。\r\n\r\n另外，聖保羅大學高等研究院氣象學家卡洛斯（Carlos Nobre）提到，雖然在南大河州洪災之前也有其他嚴重災難發生，但導致「氣候變遷」被大量搜尋的原因之一是，人們突然不再認為這是一件「自然」的事情，現在全球應討論的是「氣候緊急狀態」（climate emergency）。\r\n\r\n資料顯示，「減少污染物排放」是上個月巴西人在Google搜尋最多的另一個關鍵詞，保羅就強調，僅僅只有巴西減少是沒有用的，這取決於全球政策，包括乾旱、洪水和生物多樣性喪失的問題，「我們必須同時處理所有問題……適應新的氣候」。', '20240615103912.webp', '2024-06-15', '周刊王111', '上線');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
