using UnityEngine;
using System.Collections;
using System.Collections.Generic;
using UnityEngine.Networking;


public class Test : MonoBehaviour
{
    //画像リンクから画像をテクスチャにする
    Texture texture;
    //テクスチャをマテリアル化するので生成しておく
    [SerializeField]Material material;
    //画像リンク

    void Start()
    {
        //Debug.Log(this.transform.localPosition);
        // Material mat = this.GetComponent<Renderer>().material;
        // マテリアルの色設定に赤色を設定
        // if (this.tag == "red"){
        //     mat.color = new Color(1.0f,0.0f,0.0f,1.0f);
        //     Debug.Log(name);
        // }

        // if (this.tag == "blue"){
        //     mat.color = new Color(0.0f,0.0f,1.0f,1.0f);
        //     Debug.Log(name);
        // }

        // if (this.tag == "green"){
        //     mat.color = new Color(0.0f,1.0f,0.0f,1.0f);
        //     Debug.Log(name);
        // }
        StartCoroutine(Connect());
    }

    private IEnumerator Connect()
    {
        string url_1 = "https://res.cloudinary.com/demo/image/upload/sample.jpg";
        string url_2 = "https://res.cloudinary.com/cld-name/image/upload/l_harlequinmask,w_1.7,g_adv_eyes,fl_region_relative/team.jpg";
        string url_3 = "https://res.cloudinary.com/demo/image/upload/pasta.jpg";
        UnityWebRequest www = UnityWebRequestTexture.GetTexture(url_1);   

        if (this.tag == "red"){
            www = UnityWebRequestTexture.GetTexture(url_1);               
        }

        if (this.tag == "blue"){
            www = UnityWebRequestTexture.GetTexture(url_2);                    
        }

        if (this.tag == "green"){
            www = UnityWebRequestTexture.GetTexture(url_3);                    
        }
        Material mat = this.GetComponent<Renderer>().material;

        yield return www.SendWebRequest();

        if (www.isNetworkError ||www.isHttpError)
        {
            Debug.Log(www.error);
        }
        else
        {  
            //textureに画像が入るよ
            texture = ((DownloadHandlerTexture)www.downloadHandler).texture;
            //textureをマテリアルにセット
            mat.SetTexture("_MainTex", texture);

            //this.GetComponent<Renderer>().material = material;
        }
    }
}