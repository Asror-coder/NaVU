<template>
    <div class="p-4">
        <form @change="emitNode" class="w-full">
            <div class="flex flex-row mb-2">
                <label for="floor" class="flex-none">Floor</label>
                <div class="flex-grow"></div>
                <select name="floor" v-model="floor" required
                    class="bg-gray-100 w-32 shadow-md rounded focus:outline-none flex-none">
                    <option value="" disabled selected hidden>Floor</option>
                    <option value="base">Base</option>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                </select> <br>
            </div>

            <div class="flex flex-row">
                <label for="floor" class="flex-none">Location</label>
                <div class="flex-grow"></div>
                <select name="nodeId" v-model="node" required v-if="floor=='base'"
                    class="bg-gray-100 rounded focus:outline-none ml-2 shadow-md w-32 flex-none">
                    <option value="35">Front entrance</option>
                    <option value="42">Coffee shop</option>
                    <option value="39">Grand cafe</option>
                    <option value="38">Back entrance</option>
                    <option value="36">Front elevator</option>
                    <option value="37">Back elevator</option>
                </select>

                <select name="nodeId" v-model="node" required v-if="floor=='1'"
                    class="bg-gray-100 rounded focus:outline-none ml-2 shadow-md w-32 flex-none">
                    <option value="48">NU-01A23</option>
                    <option value="53">NU-01A45</option>
                    <option value="55">NU-01A55</option>
                    <option value="57">NU-01A65</option>
                    <option value="64">NU-01B03</option>
                    <option value="66">NU-01B11</option>
                    <option value="68">NU-01B13</option>
                    <option value="69">NU-01B23</option>
                    <option value="70">NU-01B29</option>
                    <option value="58">Coffee machine</option>
                    <option value="46">Front elevator</option>
                    <option value="71">Back elevator</option>
                </select>

                <select name="nodeId" v-model="node" required v-if="floor=='2'"
                    class="bg-gray-100 rounded focus:outline-none ml-2 shadow-md w-32 flex-none">
                    <option value="76">NU-02A01</option>
                    <option value="78">NU-02A02</option>
                    <option value="82">NU-02A23</option>
                    <option value="83">NU-02A29</option>
                    <option value="94">NU-02A45</option>
                    <option value="100">NU-02A46</option>
                    <option value="95">NU-02A53</option>
                    <option value="102">NU-02A54</option>
                    <option value="96">NU-02A55</option>
                    <option value="97">NU-02A61</option>
                    <option value="98">NU-02A65</option>
                    <option value="99">NU-02A73</option>
                    <option value="114">NU-02B03</option>
                    <option value="115">NU-02B04</option>
                    <option value="116">NU-02B05</option>
                    <option value="117">NU-02B11</option>
                    <option value="118">NU-02B12</option>
                    <option value="119">NU-02B17</option>
                    <option value="120">NU-02B18</option>
                    <option value="122">NU-02B25</option>
                    <option value="124">NU-02B35_1</option>
                    <option value="125">NU-02B35_2</option>
                    <option value="104">Coffee machine</option>
                    <option value="75">Front elevator</option>
                    <option value="127">Back elevator</option>
                </select>

                <select name="nodeId" v-model="node" required v-if="floor=='3'"
                    class="bg-gray-100 rounded focus:outline-none ml-2 shadow-md w-32 flex-none">
                    <option value="136">NU-03A01</option>
                    <option value="137">NU-03A23</option>
                    <option value="138">NU-03A31</option>

                    <option value="141">NU-03A45</option>
                    <option value="142">NU-03A53</option>
                    <option value="143">NU-03A61</option>
                    <option value="144">NU-03A69</option>

                    <option value="149">NU-03B03</option>
                    <option value="150">NU-03B07</option>
                    <option value="151">NU-03B17</option>
                    <option value="152">NU-03B25</option>
                    <option value="153">NU-02B35</option>

                    <option value="147">Coffee machine</option>
                    <option value="135">Front elevator</option>
                    <option value="156">Back elevator</option>
                </select>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: 'SearchFormComponent',
    emits: ["newNode"],
    props: {
        passedFloor: ''
    },
    data() {
        return {
            node: null,
            floor: this.passedFloor
        }
    },
    methods: {
        emitNode() {
            this.$emit('newNode',this.node)
        }
    }
}
</script>
