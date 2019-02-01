@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALUAAAEXCAMAAADcLvXKAAABC1BMVEUAAAKRUjP///8AAAAREiRjv74AAAENDh1lxsQoSEeTUzOVVDU2HxOUVDORUTPQ0NAAABYAABtXMh6YVTSLTzI9PT0AABLs7OwAAA8AABxDQ0Pf399VVVVNTU3z8/NISEgmJiakpKRjY2MVFRWCgoLExMTW1tZOLRupqal8fYIuLi57RiwdHR2xsbFrPiePj49ubm5uPycVCwhgYWi4ub53eH1DJxioqK6ESS8YGilNTVc8PEdiOSI2HhIvHBWamp9zcnoiFA03bWlVo6AaMi9AfHyDhY9bsbBlZW0hISs3ZGUXKys8JhtLi4giQj8NGBpDhoYsVFJDQ0wuLzwxMjsnFA5VMhxKJh4dEgkjc8PjAAAYjElEQVR4nO2djV/aSPPAk67k7IZEIang4XlqpWhzgiACRQSprbXvL9bn/P//kt/OJoG87G42IWD7+d08n+vTKsl+mczOzs7uTpQnS5HdWn3/8HTn2d5zIv+8/PvgvHVUr+3mdXslrxvNpXZ0+g/iyEGrXsmhiZypd+unPOCZ7B12F1V6rtQbycie/LlfW6ShHKmP9gJYiqKR/4X/0ELgz/az20pu1JMZDoXkS4B9p/641Cc+MRERMsXW5lp/vv941LWXPnMS8Zx8pvBWhq6ZB3VrpmdZ6LDGW49AXXnmWXN6mXGntZOFqTdS2kZM464P31gp9ckizEHu0zTmvSD1fmbriHOncIOLUe8vzhzgPl0NdX1B6whwu977xQqod92hOxdqz0oknckC1PW9XMwjzC1nJZmpN56h/FQd4P5TxpdkpN49RTl4jxg33PIfiVAwG/VJ2rgjDTZKDr2zUO8eLIdZHjsD9WJjeBK2JoOdnrq1ROYZdoJtp6beyb8TRoQ+SrEnSUld2VuupkGotvdypK4tnxmEzilzo95YunW4Qk37MCfq+hIGFo5AQ91cqLurg3Z7JN+RyFPXV2PTAe5ni1OvyqYD1PzJuyx1bcXQLjZvliBJXVmhTQeoeV5bkjrXCYCkgP+bLEK9/GGcQ83xI1LUrZV6j7mQZg8yU6/afQSp2R1Sgnr3saAp9p8ZqR/FqF3ROCmpZOqjRzJqSq2xR8hE6srjaVrhKjuReucxoamy/0pP3c05VZMam+lGkqgf1T4UV9nxLFoCdeuRVe0qOzb1FVM/blecUccyrWLq00dXNaV+mYq69oiuOkgdy0UJqU8fXdMednRSI6KuPbpR+9QoBfX5r6BqpssWUO+mULUms+y/AHXERATULWlVu2sTy0uzxryIgFrO67mZW+Bemra12EyMT12XUZ+/fq8tcw4PNz+RpJYI9oDZW3Eb3xPyJVKHYxEudSXZQPx9EvdlR7UGy1X2cznq/QRqqmfykU5joOuqaRrl5ZpITYr6WYKqXWt+aKqWSgXrU6QsCTtm2DxqsYFoXgds6lj1xMSDpVm2Fk3C86j3E6Dhv4ZpqAHRm0szbS2SYeBR/5WkatRxDNUMUptWcYnUSIJauImCOo4exmpUzM6SsKPdkUNd51O7/nlkxZhJj3SWSF1Ppj7kqxp+g9oGA1o1jSZ00vy5owEUh/olt22qaUc3WdSqajSWou3o6Mim5gap4D2Iplnm4TmSInkS+XNHMmdsam7kBNSoyYc2VTxdxgw5MqazqXmhNR3Fy4bJsQ/KbXaU/OfIkawIm3qHq2oFXep8ZGra9hIGm4jrY1NzmqXRkphZxaY6oI4kV25oeSOBmheEwLVOAjUR3cm9R0LL3QTqDaau6Y7pBr8nhrBzNpJI3oxJfcSmhpgpPoyzrMRwsfPjjgwzTOpDFjUdyZsC7xHEpmN7jg4wEqsyqXdYDZLgGU0tKV0D90DJ0wFGBkcmNWs8p65aoiv6Yg5gQMpL20B9kEDNNBCYiMt0xZm27U5+tg2t/yWmZkUh1KodWftwsfEYpjy5JHeg9WdialYuFS67t+T64sxIjF5eyZ1I7p1FzXDXkBBD7VSqBm1bIy+dtgJqRsQHvrrDnAmIxR1vFtd2ZGMii/qESY3KCWETQ0xVt6coh4SrBPU+m9pOr2oV+mQD0YTrwtQJFtKKUYMHGWcwECpWm3ruhbjlqBmqHplpO6Mvhj1e1LolPN8hg1rLaCAgpqGXQdcLcAP13ymp6biYvi8GRB9MEU0DZj3lhkK7hKWpRzFqrJrYsEg8RaaRpq5bNCHM5YZMcXZtS0RP5yzqQUx9Orbb5eK0Q22281BsjBzb0BmJNO/zi1i3RKTK0nXHCKsR6447XNMEyUymjbaqc7hNy+n4V2ShTpgVxKghGRnye6bhTBFPeux0morbvY7/mSzUCTMwlq7DMYje4zLDd2Sr2qBuOxt3ZLVAZpSJmTUeBznDh+NBBiwbwXbs+6Wjrqejhn8GPYh+OWv4YXo/fYhRM+NwPGA8lzTUL8TU0TiEXHIZMFVjRH5L1+tsHcQy1EG73Hvw9a5xZg+D+ZOZjmfWIudSIsu7LOpoYkELx3v0SRcdS58N8ZjESLputxtTCQshbsYmo47fM+SC78gSB4u6G6aGKwKdUW8QPbVZk3Ugb4L1sF2fTrRbHNm6u5xj2WVY6JMMYyMbACTmMuEoFasIPdi8rDuZvpjNBnvwx+WRbRm+3yfjqtEezxUuJtfCx35Y1C/i1IHJuYPG4ukj5oW0Bow/gWtN3Rg0Zh5IRB5dcGRRV2LU0zm13pjqWSPtuJD4xfk34ERj5Jor5HdHCdRP/BtoPnVgZDQu7cgyI9Eh12C4tETPOnatxdDbAfAQebBQykYS9fP5HRTqrstzar0Z7mskIBk1yk1bOpdGL8J2s0yiLcO9CBu6U55GyINlRkB2k6j3XH/kzZvItaM5tRmKRk297Q0ylwNLldO4SZg/uRd1mv5FOvgfN06Jj7Xws9A2bN4o466U+/8fHzZs93vgQEBSlk3y6CMPjfxRxNTrY5tqXB80G6GwrNMbOQN70CEfPRFTQ2fstG2ikbJ7ay0eXJPQmhimboxRzx/jEOJ4vKhY5XkY1UNTCNQNZzDXueqMevf0Aw2HtIGxqasRE2FQnwImVaW7MESaiM0ZbWyPyg3yRAfjgPX1JLCxXg7o8sFWOr0GOHI7YHmGYeGBQ/qK/wNI0Irja1B12XMKbvJciw122BlYBibzgsEgEH72ipeJTtG0euNGANuxUc9RLWsQMUJiNzhgcDRjuCugBque6dZy7TbKQmYFxHE0kOMm8jyZWs3xQKhuE9vjkXUZuKasD1Bv9L+RI35MJjz1EwH1y9CTpjbSieetSaQ3Qo6OA49b6xArHIkT887INK1gf2tgPFDKEDcKockwERzTY9SQvA7GSmMUGhr925DQFNI6uBkggORDgoXA7h3jU+AamPrjUa/cFl9HPoMCUV+Muh7ufPTTjDUCEprSrzafoGholNAyxVaD31RBAxOcPjd0mbcHDb3gUk+IQQRsjPZH/iK0ac3iZKSocsMjVjuza4q8CX38qqBhx6jPiVmHVJvg0cx75GbDkGNIjjIwF9PofKgjH78YxYDvi1HvQA8JfFrviKmx6mr7IcELhLHdwPqT5NOh1L1A9ilG/Yx4o8C96MYx8ehhkEho5KSKnlQScpVHgzRLajCFOuBSv4yk9CD10RN3Fqzz82T8i3C6a2BI3ZGnJt/xU37TgKxiiqn/jizAgBNJvfiVv5hiCzmIxm4mCZUeizUg0BvPudSHJOZN00tWJRAHTLjUR5D1fWxEliiiUWYDlmB+BZMIC80S1rjUNHpaaA1mKaKLoycYZmTmJCsWGOwEkSrNA0vOtlcpJD48ElDXfkUToQFzRUANJnLv+75fpVtCDCdebzyZbXAydNs2ZOPP3MXUTRuWAkn7ehslrnA8J3EnmaRjswEhcPmRoFUVmlfK8LxxJPnE2x9CYhHbOxPTIfPD1esbplywmRd1bNVqIIkd+nvk047e8adJ9/bq7ds0On566N6CiWao1hZvP5+C4Pud1l4coOw7WhYQu0cQaPOIkqADGWoEGVX6/Wh9ydGKlW1AzuQvv3nIRstRQy6VunV6/L+8MHWqnoExWPS+33ys1AyfGnlLIfQkfTHdsDOIWBQ4r1Q3sMPNS1PTrlD3C2Pepwq5jfsoo95opPH7pruhru6tIkK/TKbeQ36m9Jmv9lTrF44ST8KiRoqo3U9Puc3T5Qop6mjJ+zROxGwyEt6cFV/OHYJJTxdFknp+/Bn+TLGHGahjG/kt1h4krgR3cmixXU8c6n/89UZ3FS31HlUb1p/CK6JqaEkqSawxmi2EKbLUz1F4FwRK1aSbQ7lvG4HMI4zJKfZBWyhEENkzzqcOLbHCSlGq0M9NUfeaA+zubIANZmm2uZootiaeiTrlfk+97UYxSrHs2CZ2Op+cFL6TTm1TU6M4dSfVKGHC4ZPGGMg7lyPYyWCkcp3tOHWyXaOIXWeKn7BuWQTekM6rBy4thwGkqaO6Rk6WEDtjWA69OR/qVWYo6RJWLtSrjFUxykgd3rWmrTazY2eljm2ejIVxyxM34suFWlldhsFoMnzYX1moFdRcmbKtcVbqyG5Mct1D4uBmWiZOFDNxy068gkBGXdPrEpVNh7REuU9yRvp9XtTuxvGE5ox7Geokz+9+95jOslgIjbGTojaDvys7KOKIFdPCGBmpmecb7YRNk9D36xsCebGfeIRFZ9TXWYz6U0KHtCNbweJyCIlPga5NlVXLKHJaJgW1Ow8T2wgsQ+yxbhi8c0NoIMTrabHd5ItRa4qowoLns45Yd/QE9lQJp+p0TSAbNbsOB92B2ROPkDqk5/hF5OHG4kkRu0bDAtTuKWlxegBDrYJYlciZwInx2IbGyLdmVV9ahNrNjwhbdfPjjGKzVCBl1xN1aKj0wtyFrS1A7da0EB8YpAH9S6aRQCr6QfSo+AWjNIl6T/wiiFqiYaoqPfEar8defw4/F/lqMC+FveF9ceqEshZYpZVxUCtYn2n3hObuOwJorNoKt37HgtT0hHdZjK17e373zvdhoKzvH7qvs0I98fJOh3+0QIa6wqX2yvkkpM/0QZERfnTaono6Jo5FejlSewU5xGMktpxoIDVu6/xrsNeLuYc4FqaGeY2GmgldElvYKRe9A5vFRtsWzgVMTKEFqkLJO/QTqDVYHhslpZRMbMK+dVW3LB3SZYKvSX4L0Yf4vMyC1Ipf9UlMLS/E2qdCTedETQ92SNX1kRHdKzSyIHVyVWPqt4vpN0wyoR0tQdN5UbuVOR7y2NUlVawjJ2rvXHSaVDpH071k5hypNTrelGUPJLHFsJP6Yc7UnrbH9gLqNtqS9QBypPaWUQUlBsWC9QbdtyLTlAT1Czlqz5WgHs6wiKGaulsJQPbYbl66BqHRXcdJWZwIFG2U3fNxsurJk9qzkkZaaGPgHjCUbSZPCwGhbdNCtikUDctFWopT9JEj0otTz6zbxrJmYrXlLXpp1DR4VaCcrRQ2Vr0TVakaSKZml0IU3dRV93SQuApiQr2DtMxLonatBPYIJGz8My3ngR5KSnf3ZVH71k0mOQLz1u0ekhwNV0Ttc4+53gTDfnUl072XSO0mixH6xDJvUzeaNPjPVGNLi2SYc6Wm3ESbl+3wTgUodlFW0gwrq6b2dnf921YtjA1M/jOswWjs2nPWYmYroPZTIPeNkeM47fKs8lD2grbLp0aN5gMK1x1way+1F7rtsqnLlj4oR0r8FJuqZS+XWuptJ7zb00yJWyWH7ntCD72yo0IeZzHqf5aqaz+/gyFrZtq2qhveTq0lUy+uazfkmDk+85enRtxc2q9Mzc8A/kf9u1A/Xyr1suw6kbr7W+r6/xG1X58pgVoLlL/Kl5pR3ViO2M2N8DYaBWshpuTOmTpYAMv/G2dbg6nOPuZNEOR1nit1+HAKBEqNRoO7DddoFy+LxVDJSlmdQzu5UHvHUuaxKC3oSII9fnIBG5ZhWboz8it/abLkOVGHtNzpjQa6Jb22hAM1yzyNJ5UPXpxaU8LEzQE2Um5hhRiQzCZ9cs2bUYrWk5Op2a/hmF/vi3JJdJyh4Imvc6wbTrkYsDPR2u4C1AHmadlxzy8vIiYht9v/dpK4s1PPiTXUgyqCeW3Zx1YjODfOSs2oRh+yDKRw6y5nom4T6C+F6+98d5iNes784foz3b+UI7UNo06hUFgvvH3D0Xh66pCT+7BeWH8NriM/bBOSENcFKuuf2ZaSltq3ZKQ0oEguoS6sf0BQDjCXYwamacHKwdt1l7oA1D3fq2Slnum52DZ02Dv7mmoELHCa+UUAIdHLxD6e+tCFa/IvQx35OSAtA/VMzWUbllwMEkK8du//lGLnAE1fsPS1UJhTQ/ESrDuXnr41aeoJ/bSv52nbeyUm7Pf3H+UXaiQLa9utif0uTE21YflFm2eHSWWokZfTHc/Xba2HOfX6lzy6JIbTl+jzepDa3wtvWnbDx6D6k6KmEmCGeg0IffNvvw5GkubYM5N6GuyJvl17GyxNEmMF62rKUk9DheBMKHLxeXZ/2iVRivJ2cYGOgr4HoQvv0HwsgIIBdnEWpSRRt1x/2Y6e/0RBatcBLlJBx/gEY2IImlIHHqBpGu2OpK53YLDqxSoj4Plo4GK/XmSHnGlBIeaPhUKEOvT6LuJdddxwV84SqGnFEMb6mxmhLqx/Ax1c4kyem+4v/1qICqOWveFQHyyuyXxOvlnHji++0dlqiLqwfk33KyQvRMeF7sMJ+jyfOnYKiCiFbvgTVkiHCkQPzIbsGHVh/d1X+srP1NhWjw3N0rW7I1T49hC6b9Jmbjm2Eaudp+DWezjd/ED/hJg3K6zHda3Sao8wxte51AfMy6gMmA2tv3V3taTYs6Wrl9C/GNCUmnW6zbRDHTJCDZuHOLkjei6V1dA17eMN+Tm6/UC+53MWNJca06nDIYf6FCkarzEOdcENplBHbosctuip3KjLS6D2NllWmNS7fFW75w45bbnBfFFcRlqlLy2yaEGTp+wbUWr2RnoMU55DJjVkQnjnLCj1Oqexd1TdqJG0k9J7ydZrzn0K61+5J99pQQAm9Q5UMua9QEhADep+Pudm+xNTxXqTFub/zL/NRy41fdf9CYP6Bd16z1ETPTnEbY7Iazde6HHsBJuWWx744zv+Xdbf8E0Ugq0dBjVxe5rO2+QLh/i+iqjXC9/dgHjcNOn+kEAUBHHH4BP97QfhPd5wK2KZ9KhqnBrcHr+cAuz/+ShqEczbz2n0mvDGHHMWc1p62z1D8/FaeAuYbXDreA2IKdRj1DDC8Ic4KOrxRkwN3NROYEiAFyTY9AiHOmj6RdHfJtwAJhvc1x7AZKoVpRaMMFTXhPpLEjVpd/3zFxSUzjyf8rqQ+K2/C47IghfZiVKDqrnM7jVPk6mpwr954IqmIH8y8vFbIrNLza2eMTdsRVbVlPq7FDUovHD9+svXucLfvL1el7r2g+D9uHR0roSpT8Wqpmfkv8tBe+TrhXfXn4lcv5PQsnfRN0HfohH+Rog6SdWU+kMK6gB8CiGhGHfmD29vc49gK3NVa+RLCqJkeDvD6/TUKQUCkRGPAkp0tILUlSRV08lukuPKgZq4vk88DnjcB0Hqc0Hc5EIP4hOwZVDDJIP7uMveOUdlrmph2T+TnspfuqrdnBmv6oU58nbIedTwHndxRhqicjl3vZhArMobHWnYOaemqhaH9JAve7t8aBo6apynTh327oyaqlo47zNXY9YF1/c1OY994A0zlBomXg1LF4lF5wQrkTdQOYgJYUDt7g2fGlQ9LooFEhLfn65C3ghovFhV8VT9u4g2o37y/LFZ0gi80Ec5JjLc/OO3kfcArGwSKa39RgLAymNDZJL/qFcnvzl1yfvPle35J0pbm6QLBC6hf3/cHuxTXwy310rDO+9fpdsZ1NZw/7y61ppjb7ZekY/f3K4QMiY+9Va3ulbtb1aJYskfSh+tbVWrRM/Vs8pN9wXaRWtVhEprm8TNV+62EKG+E953NdTVE/LHZNg/GVbP+/2L7gT1+/2fV5ObSZfQbpPJcL9SG1avKpVhbfu4djc8y9TcdsjWiFb8Z1qKf26ruga/Jn/ZWqsSSyhRWw1Rl85ulKuzPkL9nxNUJbqeDJWtk6tj9Kq22/25XUFXNfRjV3nyfrtaa9W2yC2yQL86rx5Xtwjs9hYhKlV/9G8VMmysldAxdJTNEvn55lZps3RVmtxNjt73z0o/b+4m+z/7t9Wzs6uJb6iz3oi6qP9qYzKpHw9LxFbQiUL0f3VWWkMXkydbFXTS2kKVqzpaQ7Unt9UsyGvwRFH/YvJzOLmto8nV2U3/J9p4fzNRzif9n2elu/2z00m1Nbm6ITrrKqh/dtxHN310fnsBdC00PC5FqKtEyWsTEgneXlVLRNf9zRIC6i1qybtoQp7Dkx81VEWVn09ebfO4xFI6bp3Vj29O0PtJX5nsD9Hkpv+jNWxN0H4doRO01lf2uxeT/Vc3qI+ubm9uJretLvrRRSc/WuRD5AMR6tKP2g80OR7eoO7t2XBy9aM7nByfn6H+i5NaHdXqpUq31kcbL+pnlVfHlazKJqZ2MxlOiCrP+v3JHXnm/SHpRieT7tnx1VX/tt8/O/pxc3Tz6q52d0L0PHl10b3o9/cnk7vbyfAwatfEqG4316rD47u16u3V++pw89XxRfXibm1zeH6B1pSzUvVqqKyhs9vS7SvlKrMDqZLeVSKWvVmCnkicEjXwrT82ydPb/IP8ZXtzbXvzgv6K/GCTdljaZ7dL8y4bGBvpOOP93v83/ZE3AJW8D5RiPX7l8puP6L+V/Ee9Ovk9qf8PK/D6Fq97O7kAAAAASUVORK5CYII=" class="img-circle" width="70%" height="auto">
                </div>
            </div>
            <div class="col-8">
                <h2>Name: {{$users->name}}</h2>
                    <h2>Email: {{$users->email}}</h2>
                    <h2>Age: 19</h2>
                    <h2>Location: Biala Podlaska</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($photos as $photo)
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="row card" style="width: 18rem;"> 
                            <img class="card-img-top" src="{{asset("storage/images/{$photo->uri}")}}" width="200" height="200" alt="Card image cap"/>
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$photo->title}}
                                </h5
                                <p>
                                    {{$photo->desc}}
                                </p>
                                <a href="Show" class="btn btn-primary">Show</a
                                <a href="Show" class="btn btn-primary">Show</a
                                <form action="{{ route('photos.destroy', $photo->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @if ($loop->iteration % 3 == 0)
            </div>
            <div class="row">
                @endif
                @endforeach
            </div>
        </div>
        <a href="{{ route('photos.create') }}">
            <button type="button" class="btn btn-primary">
                Dodaj zdjecie
            </button>
        </a>
        </div>
    </div>
</div>
@endsection
