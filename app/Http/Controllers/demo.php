<?php

if($request->session()->has('ques_position')){
            $sessionData_ = $request->session()->get('ques_position');
            foreach($sessionData_ as $row){
                $languageCountC = $questionsModel->getSingleRecord(['id'=>$row['questionPositionData']['current_ques_id']]);
                $languageCountS = $questionsModel->getSingleRecord(['id'=>$row['questionPositionData']['swap_ques_id']]);

                $currentQues = $questionsModel->where([
                    'id'=>$row['questionPositionData']['current_ques_id'],
                    'deleted_at' =>  NULL
                ])->update([
                    'question_no_order' =>  $row['questionPositionData']['swap_ques_no']
                ]);
            // }
            //     foreach($sessionData_ as $row){
            //         $quesByLang[] = $questionsModel->where([
            //             ['id', '>=',      $row['questionPositionData']['current_ques_id']],
            //             'deleted_at' =>  NULL
            //         ])->take($languageCountC->language_count)->get();
                    
            //         foreach($quesByLang as $col){
            //             foreach($col as $h){
            //                 // return ;
            //                 $h1_[] = $h;
            //                 $que[] =$row['questionPositionData']['swap_ques_no'];
                            // $questionsModel->where([
                            //     'id'=>$h['id'],
                            //     'deleted_at' =>  NULL
                            // ])->update([
                            //     'question_no_order' =>  $row['questionPositionData']['swap_ques_no']
                            // ]);
                    //     }
                    // }
                


                    // $quesByLang_[] = $questionsModel->where([
                    //     ['id', '>=',      $row['questionPositionData']['swap_ques_id']],
                    //     'deleted_at' =>  NULL
                    // ])->take($languageCountS->language_count)->get();
                    
                    // foreach($quesByLang_ as $col_){
                    //     foreach($col_ as $h_){
                            // return ;
                            // $h2__[] = $h_;
                            // $ques2[]=$row['questionPositionData']['current_ques_no']; 
                            // $questionsModel->where([
                            //     'id'=>$h_['id'],
                            //     'deleted_at' =>  NULL
                            // ])->update([
                            //     'question_no_order' =>  $row['questionPositionData']['current_ques_no']
                    //         // ]);
                    //     }
                    // }

                

                    // return [$h1_, $que, $h2__, $ques2];
                $swapQues = $questionsModel->where([
                    'id'=>$row['questionPositionData']['swap_ques_id'],
                ])->update([
                    'question_no_order' =>  $row['questionPositionData']['current_ques_no']
                ]);
            }
            // foreach($sessionData_ as $row){
            //     foreach($currentQues as $col){
            //         foreach($col  as $i){
            //             $questionsModel->where([
            //                 'id'=>$i['id']
            //                 ])->update(['question_no_order'=>$row['questionPositionData']['swap_ques_no']]);
            //         }
            //     }
            // }
            // foreach($sessionData_ as $row1){
            //     foreach($swapQues as $k){
            //         foreach($k as $m){
            //             $questionsModel->where([
            //                 'id'=>$m['id']
            //                 ])->update(['question_no_order'=>$row1['questionPositionData']['current_ques_no']]);
            //         }
            //     }
            }
            // return  'success';
            // return [$h1_, $que, $h2__, $ques2];
            return [$quesByLang];
        
    