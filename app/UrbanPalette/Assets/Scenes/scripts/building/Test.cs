using UnityEngine;

public class Test : MonoBehaviour
{
    void Start()
    {
        //Debug.Log(name);
        Material mat = this.GetComponent<Renderer>().material;
        // マテリアルの色設定に赤色を設定
        if (this.tag == "red"){
            mat.color = new Color(1.0f,0.0f,0.0f,1.0f);
            Debug.Log(name);
        }

        if (this.tag == "blue"){
            mat.color = new Color(0.0f,0.0f,1.0f,1.0f);
            Debug.Log(name);
        }

        if (this.tag == "green"){
            mat.color = new Color(0.0f,1.0f,0.0f,1.0f);
            Debug.Log(name);
        }
    }
}