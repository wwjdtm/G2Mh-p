
<?php 
include_once('./gnu/common.php'); 
include_once(G5_LIB_PATH.'/latest.lib.php'); 

    function document_get($no){
        $document_no = $no; // 문서 번호
        $sql = "SELECT *
        FROM `g5_write_content`
        WHERE `wr_id` ={$document_no}
        LIMIT 0 , 30";

        $result = sql_query($sql, false);
        $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
        $menu_datas = array();
        
        $row=sql_fetch_array($result);
        return $row['wr_content'];
    }

?>
<!DOCTYPE html>
<html lang="kr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>G2M PARTNERS</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <body>
        <article class="contents">
            <section class="section1">
                <div class="logo">
                    <img src="banner3.jpg" width="40%" height="250px" align="right">
                </div>
                <div class="container">
                    <?php echo document_get(3); ?>
                </div>
            </section>

            
            <div class="g2mpartners">
                <div class="image"></div>
                <span class="c12">&nbsp;</span>
                <span class="c1">G</span>
                <span class="c2">2</span>
                <span class="c3">M</span>
                <span class="c4">P</span>
                <span class="c5">A</span>
                <span class="c6">R</span>
                <span class="c7">T</span>
                <span class="c8">N</span>
                <span class="c9">E</span>
                <span class="c10">R</span>
                <span class="c11">S</span>
                <span class="c12">&nbsp;</span>
                  
            </div>

            <section class="section2">
                <div class="container">
                    <?php echo document_get(1); ?>
                           
                </div>

            </section>

            <section class="section3">
                <div class="container">
                    <?php echo document_get(2); ?>

                </div>


            </section>
            <section class="section4a">
                <div class="container">
                    <h2>Team Leader</h2>
                    <hr class="sec4aline">
                    <div class="part4a part2-1">
                        <h3>오성민</h3>
                        
                            <ul>
                                <li>G2M PARTNERS 대표</li>
                                <li>한성대학교<br>컨설팅연구원 연구원</li>
                                <li>前 (주)에듀앤텍<br>교육컨설팅팀 과장</li>
                                <li>前 SK인포섹<br>HRD팀 사원</li>
                                <li>前 (주)BNP그룹 컨설턴트</li>
                            </ul>
                    </div>
                    <div class="part4a part2-2">
                            <ul>
                                <li>“WISET” 성과평가 및 보수체계 코칭</li>
                                <li>“제주특별자치도 개발공사”조직 재설계</li>
                                <li>“롯데정보통신” 신입사원 역량평가</li>
                                <li>“대우정보시스템” 전사 교육 체계 수립</li>
                                <li>“롯데정보통신” 전사 교육 체계 수립</li>
                                <li>“SK 주식회사” 사내 IDP 교육 체계 수립</li>
                                <li>“금융결제원” 전산교육과정 기획</li>
                                <li>“현대중공업” 통합전산실 교육 기획</li>
                                <li>“산업통상자원 사이버안전센터” 정보보안교육 기획</li>
                                <li>“종로구” 젠트리피케이션 방지와 지속가능상권 연구</li>
                                <li>능력중심채용모델 개발</li>
                                <li>“서울시” 젠트리피케이션 피해 실태조사 및 분석<br>용역</li>
                                <li>NCS 활용 기업활용컨설팅</li>
                                <li>“제주도” 화장품 사업 해외시장 진출 방안</li>
                                <li>“우석대학교” 발전전략 고도화 및 운영체계 진단</li>
                                <li>“성덕대학교” 교육과정 개발</li>
                                <li>“동신대학교” DS-ESI 개발</li>
                                <li>“우송대학교”커리큘럼 맵핑 및 역량기반 교육과정<br>성과분석</li>
                            </ul>
                    </div>
                    <div class="part4a part1-1">
                        <h3>김종서</h3>
                        
                            <ul>
                                <li>G2M PARTNERS 이사</li>
                                <li>한성대학교<br>컨설팅연구원 연구실장</li>
                                <li>前 기업은행<br>컨설팅센터 책임</li>    
                                <li>前 씨스톤컨설팅<br>경영컨설팅 팀장</li>
                                <li>前 조선호텔<br>인사팀 사원</li>
                            </ul>
                    </div>
                    <div class="part4a part1-2">
                            <ul>
                                <li>제주 창업기업 지원 방안 개선</li>
                                <li>청년창업기업 컨설팅</li>
                                <li>KOCCA 사업 컨설팅</li>    
                                <li>소상공인 컨설팅 성과분석</li>
                                <li>무역 채권 수익사업 타당성 검토</li>
                                <li>가상 전문 방송국 설립 타당성 검토</li>
                                <li>전자정부 평가 대응 중장기 방안</li>
                                <li>원자력 통제기술원 중장기 발전방안</li>
                                <li>고령 친화산업 중장기 발전략</li>
                                <li>상권 르네상스 종합 계획 수립 연구</li>
                                <li>제주시 서문시장 활성화 방안 연구</li>
                                <li>특성화고 중장기 혁신방안 수립 연구</li>
                            </ul>
                    </div>

                    
                    
                    <div class="part4a part3-1">
                        <h3>허 건</h3>
                        
                            <ul>
                                <li>G2M PARTNERS 컨설팅 이사</li>
                                <li>한성대학교<br>컨설팅대학원 초빙교수</li>
                                <li>前 솔로몬투자증권</li>
                                <li>前 TOBE컨설팅</li>
                                
                            </ul>
                    </div>
                    <div class="part4a part3-2">
                            <ul>
                                <li>서정대학교 평생교육사업 운영 코칭</li>
                                <li>중소벤처기업진흥공단 중장기 발전전략 수립</li>
                                <li>한국여성과학기술인지원센터(WISET)인사체계 개선</li>    
                                <li>한국산업인력공단 2019년 NCS 기업활용 컨설팅 사업</li>
                                <li>한국관광대학교 중장기 전략 수립</li>
                                <li>동신대학교 DS-ESI 개발 및 성과분석 용역</li>
                                <li>제주화장품기업 베트남 진출 전략 프로젝트</li>
                                <li>날씨경영 사전진단 컨설팅(5개 기업)</li>
                                <li>동아보건대학교 발전전략 수립</li>
                                <li>내일채움공제 활성화 및 신규사업 도입을 위한<br>연구용역</li>
                                <li>복권기금 문화나눔사업 성과평가 용역</li>
                                <li>군포문화재단 여성회관 기능 전환 연구용역</li>
                                <li>강남구도시관리공단 조직진단</li>
                                <li>한국도로공사 전략체계 수립</li>
                                <li>롯데손해보험 조직문화 활성화</li>
                                <li>안전보건지원 공모사업 성과평가 및 개선방안<br>수립</li>
                                <li>군포문화재단 조직진단</li>
                                <li>군장대학교 특성화 사업</li>
                                <li>남북하나재단 조직재설계 및 인력운영방안 수립</li>
                                <li>세종학당 중장기 전략 검토 프로젝트</li>
                                <li>한국정보통신 인사 프로젝트</li>
                                <li>성우하이텍 프로젝트</li>
                                <li>제주발전연구원 전략 체계 수립</li>
                                <li>한국산업연구원 조직체계 진단 및 조직 활성화<br>프로그램 수립</li>
                            </ul>
                    </div>  


                </div>
            </section>

            

            <section class="section4">
                <div class ="container">
                    <!-- <a href="/gnu/bbs/write.php?bo_table=QnA" style="float:right; padding:10px; margin-top: 10px; background:#fff; border-radius:5px; color:#000; text-decoration:none;">글쓰기</a> -->
                
                    <?php echo latest("basic", "LatestNews", 6, 26); ?> 
                </div>
                

            </section>

            <section class="section5">
                <div class="container">
                    <h1>Contact Us</h1>
                    <div class="sendemail">
                        <form action="mail.php" method="post">
                        <label for="name">이름 : </label>
                        <input type="text" name="name"><br>
                        <label for="email">이메일 : </label>
                        <input type="text" name="email" ><br>
                        <label for="comment">내용 : </label>
                        <textarea name="comment" ></textarea><br>
                        <input type="submit" value="보내기">
                        <input type="reset" value="다시쓰기">
                    
                        </form>
                    </div>
                </div>

            </section>

            <div class="footer">
                <div class="imformation">
                    <?php echo document_get(4); ?>
                </div>

            </div>
        </article>

        


    </body>
</html>